<?php

namespace App\Controllers;

class ManageTeamController extends BaseController {
    public function getManageTeamAction(){
        return $this->renderHTML('manage-team.twig', [
            'active' => 'manage'
        ]);
    }
}