<?php

class PlacesList extends CI_Controller
{
	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('key', 'API Key', 'required');
		$this->form_validation->set_rules('query', 'Query', 'required');

		$this->load->model('Places_model');


		$result['title'] = "Lista de lugares";
		$result['result'] = $this->Places_model->getPlacesList($this->input->post('key'), $this->input->post('query'));

			$this->load->view('template/header.php', $result);
            $this->load->view('places/index.php', $result);
            $this->load->view('template/footer.php');
	}
}
