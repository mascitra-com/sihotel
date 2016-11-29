<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	# Inisialisasi atribut
	protected $_data; # atribut data
	protected $_view; # atribut view

	public function __construct()
	{
		parent::__construct();

		# Set atribut _data
		$this->_data = array();
	}

	/**
	 * init()
	 * 
	 * Berfungsi untuk mengeksekusi view
	 */
	protected function init()
	{
		$this->_data['_view'] =  $this->_view;
		$this->load->view($this->_view['template'], $this->_data);
	}

	/**
	 * message()
	 * 
	 * Berfungsi untuk menampilkan pesan
	 * @ $msg = isi pesan
	 * @ $typ = tipe pesan (default, primary, success, warning, danger)
	 */
	protected function message($msg="pesan", $typ="default")
	{
		$this->session->set_flashdata('message', array($msg,$typ));
	}

	/**
	 * go()
	 * 
	 * Berfungsi untuk melakukan redirect
	 * @ $link = alamat tujuan
	 */
	protected function go($link)
	{
		redirect(site_url($link));
	}
}