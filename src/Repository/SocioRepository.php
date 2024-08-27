<?php

// src/Repository/SocioRepository.php
namespace App\Repository;

use App\Entity\Socio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\LockMode;

class SocioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Socio::class);
    }

    /**
     * Encontra um Socio pelo ID.
     *
     * @param int $id
     * @param LockMode|null $lockMode
     * @param int|null $lockVersion
     * @return Socio|null
     */
    public function find($id, $lockMode = null, $lockVersion = null): ?Socio
    {
        return parent::find($id, $lockMode, $lockVersion);
    }

    /**
     * Encontra todos os Socios.
     *
     * @return Socio[]
     */
    public function findAllSocios(): array
    {
        return $this->findAll();
    }

    /**
     * Encontra um Socio por CPF.
     *
     * @param string $cpf
     * @return Socio|null
     */
    public function findOneByCpf(string $cpf): ?Socio
    {
        return $this->findOneBy(['cpf' => $cpf]);
    }

    /**
     * Encontra Socios por nome.
     *
     * @param string $nome
     * @return Socio[]
     */
    public function findByNome(string $nome): array
    {
        return $this->findBy(['nome' => $nome]);
    }
}
