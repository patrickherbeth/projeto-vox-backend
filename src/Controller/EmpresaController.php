<?php

namespace App\Controller;

use App\Dtos\EmpresaDto;
use App\Service\EmpresaService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/empresa')]
class EmpresaController extends AbstractController
{
    private $empresaService;
    private $serializer;

    public function __construct(EmpresaService $empresaService, SerializerInterface $serializer)
    {
        $this->empresaService = $empresaService;
        $this->serializer = $serializer;
    }

    #[Route('/create', name: 'create_empresa', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        try {
            $empresa = $this->empresaService->create($data);
            return new JsonResponse(['message' => 'Empresa criada com sucesso', 'data' => new EmpresaDto($empresa)], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/{id}', name: 'get_empresa', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function get(int $id): JsonResponse
    {
        $empresa = $this->empresaService->findById($id);

        if (!$empresa) {
            return new JsonResponse(['error' => 'Empresa não encontrada'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse(new EmpresaDto($empresa), JsonResponse::HTTP_OK);
    }

    #[Route('/{id}', name: 'update_empresa', methods: ['PUT'])]
    public function update(int $id, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $empresa = $this->empresaService->findById($id);

        if (!$empresa) {
            return new JsonResponse(['error' => 'Empresa não encontrada'], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $updatedEmpresa = $this->empresaService->update($empresa, $data);
            return new JsonResponse(['message' => 'Empresa atualizada com sucesso', 'data' => new EmpresaDto($updatedEmpresa)], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/{id}', name: 'delete_empresa', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $empresa = $this->empresaService->findById($id);

        if (!$empresa) {
            return new JsonResponse(['error' => 'Empresa não encontrada'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->empresaService->delete($empresa);

        return new JsonResponse(['message' => 'Empresa removida com sucesso'], JsonResponse::HTTP_NO_CONTENT);
    }

    #[Route('/empresas', name: 'list_empresas', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $empresas = $this->empresaService->findAll();
        $empresasDto = array_map(fn($empresa) => new EmpresaDto($empresa), $empresas);

        return new JsonResponse($empresasDto, Response::HTTP_OK);
    }
}
