<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

class LoginController extends AbstractController
{
    // #[Route('/login', name: 'app_login')]
    public function __invoke(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): JsonResponse
    {
        $requestData = json_decode($request->getContent(), true);

        $user = $em->getRepository(User::class)->findOneBy([
            'user_name' => $requestData['user_name']
        ]);
        
        if ($user && $hasher->isPasswordValid($user, $requestData['password']) ) {
            return $this->json([
                'data' => $user,
            ]);
        }
        else{
            return $this->json([
                'data' => 'No encontrado',
            ]);
        }

    }
}
