<?php
class Api_login_manage extends CI_Controller {

    public function flogin(){

        $this->load->library("fbclient");

        $token = $this->input->post("token", true);

        $fbData = $this->fbclient->connect($token);

        //valid id
        if(iset($fbData['id'])) {

            $this->load->model("User_model");
            $userData = $this->User_model->getOne({
                'type' => "fb"
            })
        }

    }
}

?>