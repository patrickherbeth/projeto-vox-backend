<?php

namespace App\Service;

use App\Entity\Empresa;
use App\Repository\EmpresaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class EmpresaService
{
    private $empresaRepository;
    private $entityManager;

    public function __construct(EmpresaRepository $empresaRepository, EntityManagerInterface $entityManager)
    {
        $this->empresaRepository = $empresaRepository;
        $this->entityManager = $entityManager;
    }

    public function findAll(): array
    {
        return $this->empresaRepository->findAll();
    }

    public function findById(int $id): ?Empresa
    {
        return $this->empresaRepository->find($id);
    }

    public function create(array $data): Empresa
    {
        $empresa = new Empresa();
        $empresa->setNome($data['nome']);
        $empresa->setCnpj($data['cnpj']);
        $empresa->setEndereco($data['endereco']);

        $this->entityManager->persist($empresa);
        $this->entityManager->flush();

        return $empresa;
    }

    public function update(Empresa $empresa, array $data): Empresa
    {
        $empresa->setNome($data['nome'] ?? $empresa->getNome());
        $empresa->setCnpj($data['cnpj'] ?? $empresa->getCnpj());
        $empresa->setEndereco($data['endereco'] ?? $empresa->getEndereco());

        $this->entityManager->flush();

        return $empresa;
    }

    public function delete(Empresa $empresa): void
    {
        $this->entityManager->remove($empresa);
        $this->entityManager->flush();
    }
}
