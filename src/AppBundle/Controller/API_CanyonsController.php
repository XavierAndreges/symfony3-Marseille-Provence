<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Canyons;
use AppBundle\Form\CanyonsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations


class API_CanyonsController extends Controller
{

    /**
     * @Rest\View()
     * @Rest\Get("/api/canyons")
     */
    public function getCanyonsAction(): array
    {
        $canyons = $this->getDoctrine()
            ->getRepository(Canyons::class)
            ->findAll();

        return $canyons;
    }


    /**
     * @Rest\View()
     * @Rest\Get("/api/canyons/{idRepName}")
     */
    public function getCanyonAction(Request $request): Canyons
    {
        
        $canyon = $this->get('doctrine.orm.entity_manager')
                ->getRepository(Canyons::class)
                ->find($request->get('idRepName')); // L'identifiant est utilisé directement

                
        if (!$canyon) {
            return new JsonResponse(['message' => 'Canyon not found', 'statusCode' => Response::HTTP_NOT_FOUND], Response::HTTP_NOT_FOUND);
        }

        return $canyon;
    }


    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/api/canyons")
     */
    public function postPlacesAction(Request $request)
    {
        $canyon = new Canyons();

        //dump($request);

        $canyon ->setIdRepName($request->get('idRepName'))
                ->setTable($request->get('table'))
                ->setTitleFr($request->get('titleFr'))
                ->setActif($request->get('actif'));

        //dump($request->get('parameters'));

        
        $em = $this->getDoctrine()->getManager();
        $em->persist($canyon);
        $em->flush();


        return $canyon;

    }
}
