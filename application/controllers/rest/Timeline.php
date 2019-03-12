<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Timeline extends REST_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_timeline');
    }

    function all_get() {
        $timeline = $this->M_timeline->getTimeLine();

        $this->response($timeline, 200);
    }
}
?>