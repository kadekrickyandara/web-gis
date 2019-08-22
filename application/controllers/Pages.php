<?php 
class Pages extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
    }

	public function view($page = 'home')
	{
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}
		$config['total_rows'] = $this->db->count_all('posts');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');
		$data['title'] = ucfirst($page);
		$offset = 0;
		$data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);

		$this->load->view('templates/footer');
	}

	public function grafik() {
		$viewData = new stdClass();
		$viewData->rows = $this->data_model->get();
		$this->load->view('pages/grafik', $viewData);
	}
} 

?>