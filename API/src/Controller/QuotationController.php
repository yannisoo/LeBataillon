<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Quotation;
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
    public function postBillAction(Request $request)
    {
        $quotation = new Quotation();
        $form = $this->createForm(QuotationType::class, $quotation);
        $data = json_decode($request->getContent(), true);

        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quotation);
            $em->flush();

            $projectId = $quotation->getProjectId();
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
}
