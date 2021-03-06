<?php

namespace App\Entity;

use App\Repository\LegalMentionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=LegalMentionRepository::class)
 */
class LegalMention
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez renseigner ce champ")
     * @Assert\Length(
     *      min=2,
     *      max=255,
     *      maxMessage="Ce champ doit faire maximum {{ limit }} caractères",
     *      minMessage="Ce champ doit faire miminum {{ limit }} caractères",
     * )
     */
    private string $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Veuillez renseigner ce champ")
     */
    private string $article;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getArticle(): string
    {
        return $this->article;
    }

    public function setArticle(string $article): self
    {
        $this->article = $article;

        return $this;
    }
}
