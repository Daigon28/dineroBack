<?php

namespace App\Controller;

use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
// use App\Services\UserService;

class GetUserController extends AbstractController
{
    public function __invoke(): JsonResponse
    {
        // $authUser = $userService->getCurrentUser();
       
        // dd('hola');
        return $this->json(
            $this->getUser()
        );
    }
}
