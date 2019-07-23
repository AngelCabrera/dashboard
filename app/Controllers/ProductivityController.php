<?php

namespace App\Controllers;

class ProductivityController extends BaseController {
    public function getProductivityAction(){
        return $this->renderHTML('manage-productivity.twig', [
            'active' => 'productivity'
        ]);
    }
}