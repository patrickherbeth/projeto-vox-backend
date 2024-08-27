<?php

namespace App\Dtos;

use App\Entity\Empresa;
use Symfony\Component\Serializer\Annotation\Groups;

class EmpresaDto
{
    /**
     * @Groups({"default"})
     */
    public int $id;

    /**
     * @Groups({"default"})
     */
    public string $nome;

    /**
     * @Groups({"default"})
     */
    public string $cnpj;

    public function __construct(Empresa $empresa)
    {
        $this->id = $empresa->getId();
        $this->nome = $empresa->getNome();
        $this->cnpj = $empresa->getCnpj();
    }
}
