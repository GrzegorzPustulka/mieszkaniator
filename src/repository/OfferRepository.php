<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Offer.php';

class OfferRepository extends Repository
{
    public function getOffer(int $id): ?Offer
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.offers WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $offer = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($offer == false) {
            return null;
        }

        return new Offer(
            $offer['size'],
            $offer['price'],
            $offer['description'],
            $offer['rooms'],
            $offer['city']
        );
    }
    public function addOffer(Offer $offer): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.offers (size, price, description, rooms, city)
            VALUES (?, ?, ?, ?, ?)
        ');

        //TODO you should get this value from logged user session
        $assignedById = 1;

        $stmt->execute([
            $offer['size'],
            $offer['price'],
            $offer['description'],
            $offer['rooms'],
            $offer['city'],
            $assignedById
        ]);
    }
}