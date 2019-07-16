<?php

namespace App\Controllers;

class TicketsController extends BaseController
{
    public function getTicketsAction() {
        return $this->renderHTML('tickets.twig', [
            'active' => 'tickets'
        ]);
    }
}