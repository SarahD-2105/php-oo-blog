<?php

// src/entity/Author.php 

namespace Entity;

class Author
{
    private ?int $id = null;
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Author
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Author
    {
        $this->name = $name;

        return $this;
    }
}

?>