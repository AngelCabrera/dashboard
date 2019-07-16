<?php

namespace App\Controllers;

class SettingsController extends BaseController {
    public function getSettingsAction(){
        return $this->renderHTML('settings.twig', [
            'active' => 'settings'
        ]);
    }
}