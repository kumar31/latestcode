<?php

require APPPATH . '/third_party/restserver/libraries/REST_Controller.php';

class MY_Controller extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->input->is_ajax_request() ||
            $this->_detect_output_format() !== 'html')
        {
            $this->output->enable_profiler(FALSE);
        }
        else
        {
            $this->output->enable_profiler(TRUE);
        }
    }
}

