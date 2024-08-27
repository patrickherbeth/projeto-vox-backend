<?php

namespace App\Controller;

use App\Dtos\SocioDto;
use App\Service\SocioService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/socio')]
class SocioController extends AbstractController
{
    private $socioService;
    private $validator;

    public function __construct(SocioService $socioService, ValidatorInterface $validator)
    {
        $this->socioService = $socioService;
        $this->validator = $validator;
    }

    #[Route('/create', name: 'create_socio', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        try {
            $socio = $this->socioService->create($data);
            return new JsonResponse(['message' => 'Sócio criado com sucesso', 'data' => new SocioDto($socio)], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/{id}', name: 'get_socio', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function get(int $id): JsonResponse
    {
        $socio = $this->socioService->findById($id);

        if (!$socio) {
            return new JsonResponse(['error' => 'Sócio não encontrado'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse(new SocioDto($socio), JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', name: 'update_socio', methods: ['PUT'])]
    public function update(int $id, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $socio = $this->socioService->findById($id);

        if (!$socio) {
            return new JsonResponse(['error' => 'Sócio não encontrado'], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $updatedSocio = $this->socioService->update($socio, $data);
            return new JsonResponse(['message' => 'Sócio atualizado com sucesso', 'data' => new SocioDto($updatedSocio)], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/{id}', name: 'delete_socio', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $socio = $this->socioService->findById($id);

        if (!$socio) {
            return new JsonResponse(['error' => 'Sócio não encontrado'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->socioService->delete($socio);

        return new JsonResponse(['message' => 'Sócio removido com sucesso'], JsonResponse::HTTP_NO_CONTENT);
    }

    #[Route('/socios', name: 'list_socios', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $socios = $this->socioService->findAll();
        $sociosDto = array_map(fn($socio) => new SocioDto($socio), $socios);

        return new JsonResponse($sociosDto, Response::HTTP_OK);
    }
}
