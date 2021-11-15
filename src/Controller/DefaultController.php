<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Services\GiftService;

class DefaultController extends AbstractController
{

	public function __construct(GiftService $gifts){
		$gifts->gifts = [1,2,3,4,5,6,7,8,9];
	}



    #[Route('/', name: 'default')]
    public function index(GiftService $gifts): Response
    {
	
		$usersRepository = $this->getDoctrine()->getRepository(User::class);
		$data["users"] = $usersRepository->findAll();
	
		$data["random_gift"] = $gifts->gifts;

        return $this->render('default/index.html.twig', $data);
    }
}
