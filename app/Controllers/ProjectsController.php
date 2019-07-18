<?php

namespace App\Controllers;

class ProjectsController extends BaseController {
    public function getProjectsStatusAction(){
        return $this->renderHTML('projects-status.twig', [
            'active' => 'status'
        ]);
    }
}