<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {

    public function action_index()
    {
        $this->template->title .= 'Le stockage wakien';
        $this->template->content = View::factory('home/home');



    }



}
?>