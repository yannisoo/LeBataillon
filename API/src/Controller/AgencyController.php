<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Agency;
use App\Form\AgencyType;
/**
 * Movie controller.
 * @Route("/api", name="api_")
 */
class AgencyController extends FOSRestController
{
    /**
     * Lists agency.
     * @Rest\Get("/agencys")
     *
     * @return Response
     */
    public function getAgencyAction()
    {
        $repository = $this->getDoctrine()->getRepository(Agency::class);
        $pages = $repository->findall();
        return $this->handleView($this->view($pages));
    }

    /**
     * Create Page.
     * @Rest\Post("/agencyPost")
     *
     * @return Response
     */
    public function postAgencyAction(Request $request)
    {
        $page = new Agency();
        $form = $this->createForm(AgencyType::class, $page);
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
     * @Rest\Put("/agencyUpdate/{id}")
     *
     * @return Response
     */
    public function UpdatePage(Request $request, Agency $page)
    {
        $form = $this->createForm(AgencyType::class, $page);
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
     * Delete Agency.
     * @Rest\Delete("/agencyDelete/{id}")
     *
     * @param $id
     * @return Response
     */
    public function DeleteAgency($id)
    {
        $em = $this->getDoctrine()->getManager();
        $agency =  $em->getRepository(Agency::class)->find($id);

        $em->remove($agency);
        $em->flush();

        return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));

    }
}
