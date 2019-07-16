<?php

namespace App\Controllers;

class OrderHistoryController extends BaseController {
    public function getOrderHistoryAction() {
        return $this->renderHTML('order-history.twig', [
            'active' => 'order'
        ]);
    }
    public function showOrderHistoryAction() {
        return $this->renderHTML('show-order-history.twig', [
            'active' => 'order'
        ]);
    }
}