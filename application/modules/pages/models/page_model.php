<?php defined('BASEPATH') OR exit('No direct script access allowed');

/** 
 * @package     Page Module
 * @author      Danny Nunez
 * @copyright   (c) 2013, 300 Development
 * @since       Version 0.1
 */

class page_model extends MY_Model
{

    protected $_table = 'pages';

    public function __construct()
    {
        parent::__construct();
    }

}