<?php
namespace App\Controller;
use Swift_Attachment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use App\Entity\Bill;
use App\Entity\Project;
use App\Form\BillType;
/**
 * Movie controller.
 * @Route("/api", name="api_")
 */
class BillController extends FOSRestController
{
    /**
     * Lists all Pages.
     * @Rest\Get("/bills")
     *
     * @return Response
     */
    public function getBillAction()
    {
        $repository = $this->getDoctrine()->getRepository(Bill::class);
        $pages = $repository->findall();
        return $this->handleView($this->view($pages));
    }

    /**
     * Lists all Pages.
     * @Rest\Get("/billsProject")
     *
     * @return Response
     */
    public function getBillProjectAction()
    {
        $repository = $this->getDoctrine()->getRepository(Bill::class);
        $repository2 = $this->getDoctrine()->getRepository(Project::class);
        $pages = $repository->findall();
        $pages2 = $repository2->findall();
        $returned = $pages + $pages2;
        return $this->handleView($this->view($returned));
    }

    /**
     * List one Page.
     * @Rest\Get("/bills/{id}")
     *
     * @param $id
     * @return Response
     */
    public function getSingleBillAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Bill::class);
        $pages = $repository->find($id);
        return $this->handleView($this->view($pages));
    }
    /**
     * List one Page.
     * @Rest\Get("/billsProject/{project_id}")
     *
     * @param $project_id
     * @return Response
     */
    public function getSingleBillProjectAction($project_id)
    {
        $repository = $this->getDoctrine()->getRepository(Bill::class);
        $pages = $repository->findBy(['project_id' => $project_id]);
        return $this->handleView($this->view($pages));
    }

    /**
     * Create Page.
     * @Rest\Post("/bill")
     *
     * @return Response
     */
    public function postBillAction(Request $request)
    {
        $bill = new Bill();
        $form = $this->createForm(BillType::class, $bill);
        $data = json_decode($request->getContent(), true);

        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bill);
            $em->flush();

            $projectId = $bill->getProjectId();
            $repositoryProject = $this->getDoctrine()->getRepository(Project::class);
            $project = $repositoryProject->find($bill->getProjectId());

            $path = $request->server->get('DOCUMENT_ROOT');
            $path = rtrim($path, "/");
            $html = $this->renderView('bill_pdf.html', array(
                        'bill' => $bill,
                        'project' => $project
                      ));
            $output = $path . $request->server->get('BASE');
            $output .= $bill->getPdfPath();
              // return $this->handleView($this->view(['status' => $output], Response::HTTP_CREATED));
            $this->get('knp_snappy.pdf')->generateFromHtml($html, $output, array());
            // return $this->redirectToRoute('contract');
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));


        }
        return $this->handleView($this->view($form->getErrors()));
    }


    /**
     * Create Page.
     * @Rest\Post("/pdf")
     *
     * @return Response
     */
    public function postPdfAction(Request $request)
    {
      $path = $request->server->get('DOCUMENT_ROOT');
      $path = rtrim($path, "/");
      $html = $this->renderView('quotation_pdf.html', array());
      $output = $path . $request->server->get('BASE');        // C:/wamp64/www/project/web
      $output .= '/pdf/contract-da.pdf';
        // return $this->handleView($this->view(['status' => $output], Response::HTTP_CREATED));
      $this->get('knp_snappy.pdf')->generateFromHtml($html, $output, array());
      // return $this->redirectToRoute('contract');
      return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));


    }


    /**
     * Update Page.
     * @Rest\Put("/billUpdate/{id}")
     *
     * @return Response
     */
    public function UpdatePage(Request $request, Bill $page)
    {
        $form = $this->createForm(BillType::class, $page);
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
     * Delete Bill.
     * @Rest\Delete("/billDelete/{id}")
     *
     * @param $id
     * @return Response
     */
    public function DeleteBill($id)
    {
        $em = $this->getDoctrine()->getManager();
        $bill =  $em->getRepository(Bill::class)->find($id);

        $em->remove($bill);
        $em->flush();

        return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));

    }


    /**
     * Send Bill.
     * @Rest\Post("/billSend/{id}")
     *
     * @param $id
     * @return Response
     */

    public function SendEmail($id, \Swift_Mailer $mailer)
    {

        $repositoryBill = $this->getDoctrine()->getRepository(Bill::class);
        $bill = $repositoryBill->find($id);
        $projectId = $bill->getProjectId();
        $repositoryProject = $this->getDoctrine()->getRepository(Project::class);
        $project = $repositoryProject->find($projectId);
        //$email = $project->getEmail();


        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('angsymftest@gmail.com')
            ->setTo('angsymftest@gmail.com')
            ->attach(Swift_Attachment::fromPath( '.' . $bill->getPdfPath()))
            ->setBody(
                $this->renderView(
                    'emails/facture_email.html.twig', [
                        'billnumber' => $bill->getBillNumber(),
                        'name' => $project->getName(),
                        'descritpion' => $project->getDescription()

                ]),
                'text/html'
            );

        $mailer->send($message);
        return $this->handleView($this->view(['status' => 'ok']));
    }

            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    ['name' => $name]
                ),
                'text/plain'
            )*/


}
