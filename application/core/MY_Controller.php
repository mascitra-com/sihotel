<?php

class MY_Controller extends CI_Controller
{
    protected $data;
    protected $template = 'template/index';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Check if method exist and load index if not
     *
     * @param       $method
     * @param array $param
     *
     * @return mixed
     */
    public function _remap($method, $param = array())
    {
        $this->check_login_status();
        if (method_exists($this, $method) && $method != 'index') {
            return call_user_func_array(array($this, $method), $param);
        } else {
            $this->index();
        }
    }

    /**
     *  Check login status before show the content's site
     *  Print Session Data & Profiler Result (Only Run on Development Environment)
     */
    public function init()
    {
        $this->dump_session();
        $this->parser->parse($this->template, $this->data);
        $this->profiler();
    }

    /**
     *  Check Login Status of User
     *  Redirect to login if doesn't login yet
     */
    protected function check_login_status()
    {
        $menu = $this->uri->segment(1, 1);
        $adminFeatures = array('Example_user_controller');
        if (in_array($menu, $adminFeatures) && $this->ion_auth->logged_in() == FALSE) {
            redirect('auth');
        }
    }

    /**
     *  Session Data (Only Run on Development Environment)
     */
    private function dump_session()
    {
        if (ENVIRONMENT === 'development') {
            dump($this->session->all_userdata(), 'Session Data');
        }
    }

    /**
     *  Profiler monitor (Only Run on Development Environment)
     */
    private function profiler()
    {
        if (ENVIRONMENT === 'development') {
            $this->output->enable_profiler(TRUE);
        }
    }
}
