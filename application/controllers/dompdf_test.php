<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dompdf_test extends CI_Controller {

	/**
	 * Example: DOMPDF 
	 *
	 * Documentation: 
	 * http://code.google.com/p/dompdf/wiki/Usage
	 *
	 */
	public function index() {	
		// Load library
		$this->load->library('dompdf_gen');

		// Load all views as normal
		$this->load->view('welcome_message');

		// Get output html

		$paper_size = 'A4';
		$orientation ='potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("welcome.pdf", array('Attachment'));
		
	}
}
