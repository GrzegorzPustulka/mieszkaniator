<?php

class Offer
{
    private $size;
    private $price;
    private $description;
    private $rooms;
    private $city;
    private $id;


    public function __construct(
        string $size,
        string $price,
        string $description,
        string $rooms,
        string $city,
        int $id = null
    ) {
        $this->size = $size;
        $this->price = $price;
        $this->description = $description;
        $this->rooms = $rooms;
        $this->city = $city;
        $this->id = $id;
    }

    public function getSize(): string
    {
        return $this->size;
    }
    public function getPrice(): string
    {
        return $this->price;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getRooms(): string
    {
        return $this->rooms;
    }
    public function getCity(): string
    {
        return $this->city;
    }
    public function setSize(string $size): void
    {
        $this->size = $size;
    }
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function setRooms(string $rooms): void
    {
        $this->rooms = $rooms;
    }
    public function setCity(string $city): void
    {
        $this->city = $city;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


}

