<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    #[Route('/user/register', name: 'user_register')]
    public function register(Request $request, UserPasswordHasherInterface $hasher): JsonResponse
    {
        $message = '';
        $requestData = json_decode($request->getContent(), true);

        if (!empty($requestData['password']) || !empty($requestData['username']) ) {
            $message = "Contraseña o Usuario vacio";
        }
        else{
            $find = $this->em->getRepository(User::class)->findOneBy([
                'username' => $requestData['username']
            ]);

            if (empty($find)) {
                $user = new User();
    
                $plainPassword = $requestData['password'];
                $hashed = $hasher->hashPassword($user, $plainPassword);
                $user->setPassword($hashed);
                $user->setRoles(['ROLE_USER']);
        
                $this->em->persist($user);
                $this->em->flush();
                $message = 'Usuario registrado con exito';
            }
        }

        return $this->json([
            'message' => $message
        ]);
    }

    #[Route('/user/:id', name: 'app_user')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
}
