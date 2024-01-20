<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/OfferRepository.php';
require_once __DIR__.'/../models/Offer.php';

class OfferController extends AppController
{
    private $offerRepository;
    private $message = [];

    public function __construct()
    {
        parent::__construct();
        $this->offerRepository = new OfferRepository();
    }

    public function offers()
    {
        session_start();
        if (!isset($_SESSION['user_email'])) {
            header('Location: login');
            exit();
        }
        $message = '';
        $offers = $this->offerRepository->getOffers();
        $this->render('offers', ['offers' => $offers, 'message' => $message]);
    }

    public function offer()
    {
        session_start();
        if (!isset($_SESSION['user_email'])) {
            header('Location: login');
            exit();
        }
        $message = '';
        $this->render('offer', ['message' => $message]);

    }

    public function addOffer()
    {
        session_start();
        if (!isset($_SESSION['user_email'])) {
            header('Location: login');
            exit();
        }

        if ($this->isPost()) {
            $offer = new Offer($_POST['size'], $_POST['price'], $_POST['description'], $_POST['rooms'], $_POST['city']);
            $this->offerRepository->addOffer($offer);

            return $this->render('offers', ['messages' => $this->message]);
        }
         return $this->render('add-offer', ['messages' => $this->message]);
    }

    public function getOffer()
    {
        session_start();
        if (!isset($_SESSION['user_email'])) {
            header('Location: login');
            exit();
        }
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);
            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->offerRepository->getOfferById($decoded['id']));
        }
    }
}