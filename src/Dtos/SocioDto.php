<?php

// src/Dtos/SocioDto.php

namespace App\Dtos;

class SocioDto
{
    private int $id;
    private string $nome;
    private string $cpf;
    private int $empresaId;
    private ?string $empresaNome;

    public function __construct($socio)
    {
        $this->id = $socio->getId();
        $this->nome = $socio->getNome();
        $this->cpf = $socio->getCpf();
        $this->empresaId = $socio->getEmpresa()->getId();
        $this->empresaNome = $socio->getEmpresa()->getNome(); // Ajuste conforme necessário
    }

    // Getters e Setters, se necessário
    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getEmpresaId(): int
    {
        return $this->empresaId;
    }

    public function getEmpresaNome(): ?string
    {
        return $this->empresaNome;
    }
}
