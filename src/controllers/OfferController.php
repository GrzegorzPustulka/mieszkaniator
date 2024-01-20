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

        $this->render('offers');
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
}