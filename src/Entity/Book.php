<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $title;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $volume;

    #[ORM\Column(type: 'string', length: 20)]
    private ?string $isbn;

    #[ORM\Column(type: 'text')]
    private ?string $summary;

    public function __construct(string $title, int $volume, string $isbn, string $summary)
    {
        $this->title = $title;
        $this->volume = $volume;
        $this->isbn = $isbn;
        $this->summary = $summary;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getVolume(): ?int
    {
        return $this->volume;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

}
