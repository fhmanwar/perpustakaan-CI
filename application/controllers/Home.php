<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
		parent::__construct();
    $this->load->model('berita_model');
    $this->load->model('buku_model');
    $this->load->model('jenis_model');
    $this->load->model('bahasa_model');
		$this->load->model('file_model');

	}

	public function index()
	{
		// $site = $this->home_model->listing();
		$buku	= $this->buku_model->buku();
		// $new	= $this->produk_model->new();
		$berita = $this->berita_model->berita();
		$slide = $this->berita_model->slide();

    $data = array('title'  			=> 'Sistem Informasi Katalog Buku Online',//$site['namaweb'].' | '.$site['tagline']
									// 'produk'			=> $produk,
									// 'new'					=> $new,
                  'buku'  		  => $buku,
									'berita'  		=> $berita,
									'slide'  			=> $slide,
                  'isi'    			=> 'home/list');

    $this->load->view('layout/file',$data,FALSE);
	}
}
