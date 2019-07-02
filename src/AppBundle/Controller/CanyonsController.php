<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Canyons;
use AppBundle\Form\CanyonsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/canyons")
 */
class CanyonsController extends Controller
{
    /**
     * @Route("/", name="canyons_index", methods={"GET"})
     */
    public function index(): Response
    {
        $canyons = $this->getDoctrine()
            ->getRepository(Canyons::class)
            ->findAll();

        return $this->render('canyons/index.html.twig', [
            'canyons' => $canyons,
        ]);
    }

    /**
     * @Route("/new", name="canyons_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $canyon = new Canyons();
        $form = $this->createForm(CanyonsType::class, $canyon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($canyon);
            $entityManager->flush();

            return $this->redirectToRoute('canyons_new');
        }

        return $this->render('canyons/new.html.twig', [
            'canyon' => $canyon,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrepname}", name="canyons_show", methods={"GET"})
     */
    public function show(Canyons $canyon): Response
    {
        return $this->render('canyons/show.html.twig', [
            'canyon' => $canyon,
        ]);
    }

    /**
     * @Route("/{idrepname}/edit", name="canyons_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Canyons $canyon): Response
    {
        $form = $this->createForm(CanyonsType::class, $canyon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('canyons_index', [
                'idrepname' => $canyon->getIdrepname(),
            ]);
        }

        return $this->render('canyons/edit.html.twig', [
            'canyon' => $canyon,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrepname}", name="canyons_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Canyons $canyon): Response
    {
        if ($this->isCsrfTokenValid('delete'.$canyon->getIdrepname(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($canyon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('canyons_index');
    }
}
