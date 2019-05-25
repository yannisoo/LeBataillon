<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Bill;
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
        $page = new Bill();
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
}
