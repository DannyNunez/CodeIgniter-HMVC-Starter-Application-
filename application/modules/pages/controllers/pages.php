<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package     Pages Module
 * @author      Danny Nunez
 * @copyright   (c) 2013, 300 Development
 * @since       Version 0.1
 */

class pages extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
            $data = array(
            'content' => 'pages/home'
        );
        $this->load->view($this->config->item('theme_path'), $data);
    }

}