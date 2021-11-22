<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Superheros;

class PracticeController extends AbstractController
{
    #[Route('/practice', name: 'practice')]
    public function index(): Response
    {
        $entity_manager = $this->getDoctrine()->getManager();

//        $superHero1 = new Superheros;
//        $superHero1->setName('Mr Incredible');
//        $superHero1->setSuperPower("Strength");
//
//        $entity_manager->persist($superHero1);
//        $entity_manager->flush();

        $superHeroRepo = $this->getDoctrine()->getRepository(Superheros::class);
        $data['allSupers'] = $superHeroRepo->findAll();

        return $this->render('practice/index.html.twig', $data);
    }
}
