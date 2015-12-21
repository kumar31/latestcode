<?php

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->input->is_ajax_request())
        {
            $this->output->enable_profiler(FALSE);
        }
        else
        {
            $this->output->enable_profiler(TRUE);
        }
    }
}

