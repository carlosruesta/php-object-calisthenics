<?php

namespace Alura\Calisthenics\Domain\Student;

use Alura\Calisthenics\Domain\Email\Email;
use Alura\Calisthenics\Domain\Video\Video;
use DateTimeInterface;

class Student
{
    private Email $email;
    private DateTimeInterface $birthDate;
    private WatchedVideos $watchedVideos;
    private FullName $fullName;
    private Address $address;

    public function __construct(Email $email, DateTimeInterface $birthDate, FullName $fullName, Address $address)
    {
        $this->watchedVideos = new WatchedVideos();
        $this->email = $email;
        $this->birthDate = $birthDate;
        $this->fullName = $fullName;
        $this->address = $address;
    }

    public function fullName(): string
    {
        return $this->fullName;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function birthDate(): DateTimeInterface
    {
        return $this->birthDate;
    }

    public function address(): string
    {
        return $this->address;
    }

    public function watch(Video $video, DateTimeInterface $date)
    {
        $this->watchedVideos->add($video, $date);
    }

    public function hasAccess(): bool
    {
        if ($this->watchedVideos->count() <= 0) {
            return true;
        }

        $firstDate = $this->watchedVideos->getDateOfFirstVideo();
        $today = new \DateTimeImmutable();

        return $firstDate->diff($today)->days < 90;
    }

    public function age()
    {
        $today = new \DateTimeImmutable();
        $dateInterval = $this->birthDate->diff($today);
        return $dateInterval->y;
    }
}
