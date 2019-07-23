<?php

namespace App\Controllers;

class SupportController extends BaseController
{
    public function getSupportAction() {
        return $this->renderHTML('support.twig', [
            'active' => 'support'
        ]);
    }
}