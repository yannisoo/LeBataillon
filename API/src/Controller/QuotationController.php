<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Quotation;
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
     * @Rest\Get("/quotationsUser/{project_id}")
     *
     * @param $project_id
     * @return Response
     */
    public function getSingleQuotationByProjectId($project_id)
    {
        $repository = $this->getDoctrine()->getRepository(Quotation::class);
        $pages = $repository->findOneBy([ 'project_id' => $project_id]);
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
        $page = new Quotation();
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
