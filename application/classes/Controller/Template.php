<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template {

    public $template = "template/template";


    public function before()
    {
        parent::before();

        // conf session auth...
        define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
        define('LOCALROOT',"C:\\xampp\htdocs\pepi\cloudwac\cwFiles\\");

        $this->template->title = 'CloudWac • ';
        $this->template->user = Auth::instance()->get_user();

    }



}
