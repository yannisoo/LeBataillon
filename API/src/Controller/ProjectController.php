<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Project;
use App\Form\ProjectType;
/**
 * Movie controller.
 * @Route("/api", name="api_")
 */
class ProjectController extends FOSRestController
{
    /**
     * Lists all Pages.
     * @Rest\Get("/projects")
     *
     * @return Response
     */
    public function getProjectAction()
    {
        $repository = $this->getDoctrine()->getRepository(Project::class);
        $pages = $repository->findProjects();
        return $this->handleView($this->view($pages));
    }

    /**
     * List one Page.
     * @Rest\Get("/projects/{id}")
     *
     * @param $id
     * @return Response
     */
    public function getSingleProjectAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Project::class);
        $pages = $repository->find($id);
        return $this->handleView($this->view($pages));
    }
    /**
     * List one Page.
     * @Rest\Get("/projectsUser/{userid}")
     *
     * @param $userid
     * @return Response
     */
    public function getSingleProjectActionurl($userid)
    {
        $repository = $this->getDoctrine()->getRepository(Project::class);
        $pages = $repository->findOneBy([ 'userid' => $userid]);
        return $this->handleView($this->view($pages));
    }

    /**
     * Create Page.
     * @Rest\Post("/project")
     *
     * @return Response
     */
    public function postProjectAction(Request $request)
    {
        $page = new Project();
        $form = $this->createForm(ProjectType::class, $page);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();
            return $this->handleView($this->view($page), Response::HTTP_CREATED);
        }
        return $this->handleView($this->view($form->getErrors()));
    }

    /**
     * Update Page.
     * @Rest\Put("/projectUpdate/{id}")
     *
     * @return Response
     */
    public function UpdatePage(Request $request, Project $page)
    {
        $form = $this->createForm(ProjectType::class, $page);
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
     * Delete Project.
     * @Rest\Delete("/projectDelete/{id}")
     *
     * @param $id
     * @return Response
     */
    public function DeleteProject($id)
    {
        $em = $this->getDoctrine()->getManager();
        $project =  $em->getRepository(Project::class)->find($id);

        $em->remove($project);
        $em->flush();

        return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));

    }
}
