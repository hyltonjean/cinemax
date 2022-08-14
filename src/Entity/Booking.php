<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookingRepository::class)
 */
class Booking
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Theater::class, inversedBy="bookings")
     */
    private $theater;

    /**
     * @ORM\ManyToOne(targetEntity=Movie::class, inversedBy="bookings")
     */
    private $movie;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="bookings")
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     */
    private $no_of_seats;

    /**
     * @ORM\Column(type="string")
     */
    private $booking_time;

    /**
     * @ORM\Column(type="integer")
     */
    private $ticket_no;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cancel_status = false;

    public function __construct()
    {
        $rand = rand(999999, 9999999);
        $this->ticket_no = $rand;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTheater(): ?Theater
    {
        return $this->theater;
    }

    public function setTheater(?Theater $theater): self
    {
        $this->theater = $theater;

        return $this;
    }

    public function getNoOfSeats(): ?int
    {
        return $this->no_of_seats;
    }

    public function setNoOfSeats(int $no_of_seats): self
    {
        $this->no_of_seats = $no_of_seats;

        return $this;
    }

    public function getBookingTime(): ?string
    {
        return $this->booking_time;
    }

    public function setBookingTime(string $booking_time): self
    {
        $this->booking_time = $booking_time;

        return $this;
    }

    public function getTicketNo(): ?int
    {
        return $this->ticket_no;
    }

    public function setTicketNo(string $ticket_no): self
    {
        $this->ticket_no = $ticket_no;

        return $this;
    }

    public function isCancelStatus(): ?bool
    {
        return $this->cancel_status;
    }

    public function setCancelStatus(bool $cancel_status): self
    {
        $this->cancel_status = $cancel_status;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getMovie(): ?Movie
    {
        return $this->movie;
    }

    public function setMovie(?Movie $movie): self
    {
        $this->movie = $movie;

        return $this;
    }

    public function __toString(): string
    {
        return $this->theater;
    }
}
