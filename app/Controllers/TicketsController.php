<?php

namespace App\Controllers;

class TicketsController extends BaseController
{
    public function getTicketsAction() {
        return $this->renderHTML('request.twig', [
            'active' => 'tickets'
        ]);
    }
}