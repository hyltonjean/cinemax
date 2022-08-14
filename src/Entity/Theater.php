<?php

namespace App\Entity;

use App\Repository\TheaterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TheaterRepository::class)
 */
class Theater
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $theater_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $seats;

    /**
     * @ORM\OneToMany(targetEntity=Booking::class, mappedBy="theater_id")
     */
    private $bookings;

    /**
     * @ORM\OneToOne(targetEntity=Movie::class, inversedBy="theater", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $movie;

    public function __construct()
    {
        $this->movies = new ArrayCollection();
        $this->bookings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTheaterName(): ?string
    {
        return $this->theater_name;
    }

    public function setTheaterName(string $theater_name): self
    {
        $this->theater_name = $theater_name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * @return Collection<int, Booking>
     */
    public function getBookings(): Collection
    {
        return $this->bookings;
    }

    public function addBooking(Booking $booking): self
    {
        if (!$this->bookings->contains($booking)) {
            $this->bookings[] = $booking;
            $booking->setTheater($this);
        }

        return $this;
    }

    public function removeBooking(Booking $booking): self
    {
        if ($this->bookings->removeElement($booking)) {
            // set the owning side to null (unless already changed)
            if ($booking->getTheater() === $this) {
                $booking->setTheater(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->theater_name;
    }

    public function getMovie(): ?Movie
    {
        return $this->movie;
    }

    public function setMovie(Movie $movie): self
    {
        $this->movie = $movie;

        return $this;
    }
}
