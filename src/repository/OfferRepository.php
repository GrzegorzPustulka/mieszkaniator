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
    public function getOfferById(int $id)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT 
                offers.*,
                users_details.name,
                users_details.surname,
                users_details.phone,
                users.email
            FROM 
                offers
            JOIN 
                users_offers ON offers.id = users_offers.id_offer
            JOIN 
                users ON users_offers.id_user = users.id
            JOIN 
                users_details ON users.id_user_details = users_details.id
            WHERE 
                offers.id = :id;
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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