<?php
// api/src/Entity/Book.php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** A book. */
#[ApiResource]
#[ORM\Entity]
class Book
{
    /** The ID of this book. */
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    private ?int $id = null;

    /** The ISBN of this book (or null if doesn't have one). */
    #[ORM\Column]
    public ?string $isbn = null;

    /** The title of this book. */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $title = '';

    /** The description of this book. */
    #[ORM\Column]
    #[Assert\Blank]
    public string $description = '';

    /** The author of this book. */
    public string $author = '';

    /** The publication date of this book. */
    public ?\DateTimeImmutable $publicationDate = null;

    /** @var Review[] Available reviews for this book. */
    public iterable $reviews;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}