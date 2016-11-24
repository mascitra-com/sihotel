<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example_user_controller extends MY_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('example_user_model');
        /*
        $this->load->model('example_article_model');
        $data['user'] = $this->example_user_model->get(1);
        $data['user_with'] = $this->example_user_model->with_details('fields:first_name,last_name')->get(1);
        $data['user_with_count'] = $this->example_user_model->with_details('fields:*count*')->get(1);
        $data['user_where'] = $this->example_user_model->where('username','avenirer')->get();
        $data['user_where_pass'] = $this->example_user_model->where(array('username'=>'administrator','password'=>'mypass'))->get();
        $data['user_as_array'] = $this->example_user_model->as_array()->get(1);
        $data['users'] = $this->example_user_model->get_all();
        $data['users_with'] = $this->example_user_model->with_details('fields:first_name,last_name,address')->get_all();
        $data['users_with_count'] = $this->example_user_model->with_details('fields:*count*')->get_all();
        $data['users_with_count_many'] = $this->example_user_model->with_posts('fields:*count*')->get_all();
        $data['users_with_and_where'] = $this->example_user_model->with_details('fields:first_name,last_name,address','where:`user_details`.`first_name`=\'Admin\'')->get_all();
        $data['users_with_and_non_exclusive_where'] = $this->example_user_model->with_details('fields:first_name,last_name,address|non_exclusive_where:`user_details`.`first_name`=\'Admin\'')->get_all();
        $data['users_where_pass'] = $this->example_user_model->where(array('password'=>'nopass'))->get_all();
        $data['users_as_array'] = $this->example_user_model->as_array()->get_all();
        $data['users_as_dropdown'] = $this->example_user_model->as_dropdown('username')->get_all();
        $data['articles_with_authors'] = $this->article_model->with_authors('fields:username')->get_all();
        $data['articles_with_authors_and_cache'] = $this->article_model->with_authors('fields:username')->set_cache('articles_with_authors')->get_all();
        //$this->article_model->delete_cache('*');
        $data['user_with'] = $this->example_user_model->with_details('fields:first_name,last_name')->set_cache('get_users_with_details')->get(1);
        $this->load->view('test_view',$data);
        */
        $this->data['title'] = "Example";
        $this->data['content'] = '';
        $this->init();
    }
}
