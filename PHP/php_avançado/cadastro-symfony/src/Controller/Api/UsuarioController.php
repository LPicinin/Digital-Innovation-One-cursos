<?php

namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/api/v1", name="api_v1_usuario_")
 */
class UsuarioController extends AbstractController
{
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista(): JsonResponse
    {
        $doctrine = $this->getDoctrine()->getRepository(Usuario::class);
        return new JsonResponse($doctrine->pegarTodos(), 200);
    }

    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function cadastra(Request $request): Response
    {
        $data = $request->request->all();

        $usuario = new Usuario();
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        // dump($usuario);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);//prepara a query
        $doctrine->flush();//efetua a operação

        // dump($usuario);

        if($doctrine->contains($usuario))
            return new Response("ok", 201);
        else
            return new Response("erro", 404);
    }
}
