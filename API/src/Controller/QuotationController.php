<?php
namespace App\Controller;
use Swift_Attachment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Quotation;
use App\Entity\Bill;
use App\Entity\Agency;
use App\Entity\Project;
use App\Form\QuotationType;
/**
 * Movie controller.
 * @Route("/api", name="api_")
 */
class QuotationController extends FOSRestController
{
    /**
     * Lists all Pages.
     * @Rest\Get("/quotations")
     *
     * @return Response
     */
    public function getQuotationAction()
    {
        $repository = $this->getDoctrine()->getRepository(Quotation::class);
        $pages = $repository->findall();
        return $this->handleView($this->view($pages));
    }

    /**
     * List one Page.
     * @Rest\Get("/quotations/{id}")
     *
     * @param $id
     * @return Response
     */
    public function getSingleQuotationAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Quotation::class);
        $pages = $repository->find($id);
        return $this->handleView($this->view($pages));
    }
    /**
     * List one Page.
     * @Rest\Get("/quotationsProject/{project_id}")
     *
     * @param $project_id
     * @return Response
     */
    public function getSingleQuotationByProjectId($project_id)
    {
        $repository = $this->getDoctrine()->getRepository(Quotation::class);
        $pages = $repository->findBy([ 'project_id' => $project_id]);
        return $this->handleView($this->view($pages));
    }

    /**
     * Create Page.
     * @Rest\Post("/quotation")
     *
     * @return Response
     */
    public function postQuotationAction(Request $request)
    {
        $quotation = new Quotation();
        $form = $this->createForm(QuotationType::class, $quotation);
        $data = json_decode($request->getContent(), true);

        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quotation);
            $em->flush();

            $repositoryProject = $this->getDoctrine()->getRepository(Project::class);
            $project = $repositoryProject->find($quotation->getProjectId());

            $repositoryProject = $this->getDoctrine()->getRepository(Project::class);
            $agency = $repositoryProject->find('6');

            $path = $request->server->get('DOCUMENT_ROOT');
            $path = rtrim($path, "/");
            $html = $this->renderView('quotation_pdf.html.twig', array(
                        'quotation' => $quotation,
                        'project' => $project,
                        'agency' => $agency,
                      ));
            $output = $path . $request->server->get('BASE');
            $output .= $quotation->getPdfPath();
            $this->get('knp_snappy.pdf')->generateFromHtml($html, $output, array());
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));


        }
        return $this->handleView($this->view($form->getErrors()));
    }
    /**
     * Create Page.
     * @Rest\Post("/quotationNan")
     *
     * @return Response
     */
    public function postQuotationNanAction(Request $request)
    {
        $quotation = new Quotation();
        $form = $this->createForm(QuotationType::class, $quotation);
        $data = json_decode($request->getContent(), true);

        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quotation);
            $em->flush();


            $repositoryProject = $this->getDoctrine()->getRepository(Project::class);
            $agency = $repositoryProject->find('6');

            $path = $request->server->get('DOCUMENT_ROOT');
            $path = rtrim($path, "/");
            $html = $this->renderView('quotationNan_pdf.html.twig', array(
                        'quotation' => $quotation,
                        'agency' => $agency,
                      ));
            $output = $path . $request->server->get('BASE');
            $output .= $quotation->getPdfPath();
            $this->get('knp_snappy.pdf')->generateFromHtml($html, $output, array());
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));


        }
        return $this->handleView($this->view($form->getErrors()));
    }

    /**
     * Update Page.
     * @Rest\Put("/quotationUpdate/{id}")
     *
     * @return Response
     */
    public function UpdatePage(Request $request, Quotation $page)
    {
        $form = $this->createForm(QuotationType::class, $page);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }

    /**
     * Delete Quotation.
     * @Rest\Delete("/quotationDelete/{id}")
     *
     * @param $id
     * @return Response
     */
    public function DeleteQuotation($id)
    {
        $em = $this->getDoctrine()->getManager();
        $quotation =  $em->getRepository(Quotation::class)->find($id);

        $em->remove($quotation);
        $em->flush();

        return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));

    }


    /**
     * justique Quotation.
     * @Rest\Post("/zipzip/{id}")
     *
     *@param $id
     * @return Response
     */
    public function JuridiqueQuotation(Request $request, \Swift_Mailer $mailer, $id)
    {


            $repositoryProject = $this->getDoctrine()->getRepository(Project::class);
            $project = $repositoryProject->find($id);

            $repositoryBill = $this->getDoctrine()->getRepository(Bill::class);
            $bill = $repositoryBill->findBy([ 'project_id' => $id]);

            $repositoryQuotation = $this->getDoctrine()->getRepository(Quotation::class);
            $quotation = $repositoryQuotation->findBy([ 'project_id' => $id]);


            // Create new Zip Archive.
            $zip = new \ZipArchive();

            // The name of the Zip documents.
            $zipName = $project->getName() .  '.zip';



            $zip->open($zipName,  \ZipArchive::CREATE);
            foreach ($bill as $bill) {
              $zip->addFromString(basename($bill->getPdfPath()),  file_get_contents('.' .  $bill->getPdfPath()));
            }
            foreach ($quotation as $quotation) {
              $zip->addFromString(basename($bill->getPdfPath()),  file_get_contents('.' .  $bill->getPdfPath()));
            }
            $zip->close();


            $response = new Response(file_get_contents($zipName));
            $response->headers->set('Content-Type', 'application/zip');
            $response->headers->set('Content-Disposition', 'attachment;filename="' . $zipName . '"');
            $response->headers->set('Content-length', filesize($zipName));



            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('angsymftest@gmail.com')
                ->setTo('yannis.b8@gmail.com')
                ->attach(Swift_Attachment::fromPath($zipName))
                ->setBody(
                    $this->renderView(
                        'emails/facture_email.html.twig', [
                            'name' => $project->getName(),
                            'descritpion' => $project->getDescription()

                    ]),
                    'text/html'
                );

            $mailer->send($message);
            return $this->handleView($this->view(['status' => 'ok']));
        }








    /**
     * Send Quotation.
     * @Rest\Post("/quotationSend/{id}")
     *
     * @param $id
     * @return Response
     */

    public function SendEmail($id, \Swift_Mailer $mailer)
    {

        $repositoryQuotation = $this->getDoctrine()->getRepository(Quotation::class);
        $quotation = $repositoryQuotation->find($id);
        $projectId = $quotation->getProjectId();
        $repositoryProject = $this->getDoctrine()->getRepository(Project::class);
        $project = $repositoryProject->find($projectId);
        //$email = $project->getEmail();


        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('angsymftest@gmail.com')
            ->setTo('yannis.b8@gmail.com')
            ->attach(Swift_Attachment::fromPath( '.' . $quotation->getPdfPath()))
            ->setBody(
                $this->renderView(
                    'emails/facture_email.html.twig', [
                        'billnumber' => $quotation->getQuotationNumber(),
                        'name' => $project->getName(),
                        'descritpion' => $project->getDescription()

                ]),
                'text/html'
            );

        $mailer->send($message);
        return $this->handleView($this->view(['status' => 'ok']));
    }
}
