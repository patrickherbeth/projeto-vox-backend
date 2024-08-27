<?php

namespace App\Service;

use App\Entity\Socio;
use App\Entity\Empresa;
use App\Repository\SocioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class SocioService
{
    private $socioRepository;
    private $entityManager;
    private $validator;
    private $serializer;

    public function __construct(
        SocioRepository $socioRepository,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator,
        SerializerInterface $serializer
    ) {
        $this->socioRepository = $socioRepository;
        $this->entityManager = $entityManager;
        $this->validator = $validator;
        $this->serializer = $serializer;
    }

    public function create(array $data): Socio
    {
        $socio = $this->serializer->denormalize($data, Socio::class);
        $empresa = $this->entityManager->getRepository(Empresa::class)->find($data['empresa_id']);
        if (!$empresa) {
            throw new \Exception('Empresa não encontrada');
        }
        $socio->setEmpresa($empresa);

        $existingSocio = $this->socioRepository->findOneByCpf($data['cpf']);
        if ($existingSocio) {
            throw new \Exception('CPF já cadastrado');
        }

        $errors = $this->validator->validate($socio);
        if (count($errors) > 0) {
            throw new \Exception((string) $errors);
        }

        $this->entityManager->persist($socio);
        $this->entityManager->flush();

        return $socio;
    }

    public function findById(int $id): ?Socio
    {
        return $this->socioRepository->find($id);
    }

    public function update(Socio $socio, array $data): Socio
    {
        $socio = $this->serializer->denormalize($data, Socio::class, null, ['object_to_populate' => $socio]);

        if (isset($data['empresa_id'])) {
            $empresa = $this->entityManager->getRepository(Empresa::class)->find($data['empresa_id']);
            if (!$empresa) {
                throw new \Exception('Empresa não encontrada');
            }
            $socio->setEmpresa($empresa);
        }

        $errors = $this->validator->validate($socio);
        if (count($errors) > 0) {
            throw new \Exception((string) $errors);
        }

        $this->entityManager->flush();

        return $socio;
    }

    public function delete(Socio $socio): void
    {
        $this->entityManager->remove($socio);
        $this->entityManager->flush();
    }

    public function findAll(): array
    {
        return $this->socioRepository->findAllSocios();
    }
}
