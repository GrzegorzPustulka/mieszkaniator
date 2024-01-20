<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Offer.php';

class OfferRepository extends Repository
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }
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

    public function getOffers(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.offers
        ');
        $stmt->execute();
        $offers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($offers as $offer) {
            $result[] = new Offer(
                $offer['size'],
                $offer['price'],
                $offer['description'],
                $offer['rooms'],
                $offer['city'],
                $offer['id']
            );
        }

        return $result;
    }

    public function addOffer(Offer $offer): void
    {
        $stmt = $this->database->connect()->prepare('
        SELECT add_offer(?, ?, ?, ?, ?, ?)
    ');

        $assignedById = $this->userRepository->getUserId($_SESSION['user_email']);

        $stmt->execute([
            $offer->getSize(),
            $offer->getPrice(),
            $offer->getDescription(),
            $offer->getRooms(),
            $offer->getCity(),
            $assignedById
        ]);

        $offerId = $stmt->fetch(PDO::FETCH_COLUMN);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_offers (id_user, id_offer)
            VALUES (?, ?)
        ');
        $stmt->execute([$assignedById, $offerId]);

    }
}