<?php 
class Grafik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
    }
	
	public function index()
	{
        $config['base_url'] = base_url() . 'grafik/grafik/';
        $viewData = new stdClass();
		$viewData->rows = $this->data_model->get();
        $this->load->view('templates/header');
		$this->load->view('grafik/grafik', $viewData);
		$this->load->view('templates/footer');
    }
}
?>