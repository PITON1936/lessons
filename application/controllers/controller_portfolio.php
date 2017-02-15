<?php

class Controller_Portfolio extends Controller
{
    function __construct()
    {
        $this->model = new Model_Portfolio();

        parent::__construct();
    }

    function action_index(){
        $data['works'] = $this -> model->getAllWorks();
        $this->view->generate('portfolio_all_view.php', 'template_view.php', $data);
    }
    public function action_work($id){
        $data['work'] = $this->model->getWorkById($id);
        $this->view->generate('portfolio_work_view.php', 'template_view.php', $data);
    }

}