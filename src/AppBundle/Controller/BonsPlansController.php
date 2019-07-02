<?php

namespace AppBundle\Controller;

use AppBundle\Entity\BonsPlans;
use AppBundle\Form\BonsPlansType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bonsplans")
 */
class BonsPlansController extends Controller
{
    /**
     * @Route("/", name="bons_plans_index", methods={"GET"})
     */
    public function index(): Response
    {
        $bonsPlans = $this->getDoctrine()
            ->getRepository(BonsPlans::class)
            ->findAll();

        return $this->render('bons_plans/index.html.twig', [
            'bons_plans' => $bonsPlans,
        ]);
    }

    /**
     * @Route("/new", name="bons_plans_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $bonsPlan = new BonsPlans();
        $form = $this->createForm(BonsPlansType::class, $bonsPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($bonsPlan);
            $entityManager->flush();

            return $this->redirectToRoute('bons_plans_index');
        }

        return $this->render('bons_plans/new.html.twig', [
            'bons_plan' => $bonsPlan,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrepname}", name="bons_plans_show", methods={"GET"})
     */
    public function show(BonsPlans $bonsPlan): Response
    {
        return $this->render('bons_plans/show.html.twig', [
            'bons_plan' => $bonsPlan,
        ]);
    }

    /**
     * @Route("/{idrepname}/edit", name="bons_plans_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, BonsPlans $bonsPlan): Response
    {
        $form = $this->createForm(BonsPlansType::class, $bonsPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bons_plans_index', [
                'idrepname' => $bonsPlan->getIdrepname(),
            ]);
        }

        return $this->render('bons_plans/edit.html.twig', [
            'bons_plan' => $bonsPlan,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrepname}", name="bons_plans_delete", methods={"DELETE"})
     */
    public function delete(Request $request, BonsPlans $bonsPlan): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bonsPlan->getIdrepname(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($bonsPlan);
            $entityManager->flush();
        }

        return $this->redirectToRoute('bons_plans_index');
    }
}
