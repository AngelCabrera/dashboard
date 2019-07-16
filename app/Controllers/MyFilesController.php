<?php

namespace App\Controllers;

class MyFilesController extends BaseController {
    public function getMyFilesAction(){
        return $this->renderHTML('myFiles2.twig', [
            'active' => 'myfiles'
        ]);
    }
}