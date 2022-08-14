<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 */
class Movie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Theater::class, mappedBy="movie", cascade={"persist", "remove"})
     */
    private $theater;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $movie_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $trailer;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieName(): ?string
    {
        return $this->movie_name;
    }

    public function setMovieName(string $movie_name): self
    {
        $this->movie_name = $movie_name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->img_url;
    }

    public function setImgUrl(string $img_url): self
    {
        $this->img_url = $img_url;

        return $this;
    }

    public function getTrailer(): ?string
    {
        return $this->trailer;
    }

    public function setTrailer(string $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function getTheater(): ?Theater
    {
        return $this->theater;
    }

    public function setTheater(Theater $theater): self
    {
        // set the owning side of the relation if necessary
        if ($theater->getMovie() !== $this) {
            $theater->setMovie($this);
        }

        $this->theater = $theater;

        return $this;
    }

    public function __toString(): string
    {
        return $this->movie_name;
    }
}
