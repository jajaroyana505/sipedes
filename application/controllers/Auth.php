<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Login page';
        $this->load->view('templats/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templats/auth_footer');
    }
    public function registration()
    {
        // valdasi form 
        $this->form_validation->set_rules(
            'name', //<---------------------------------< nama form
            'Name', //<---------------------------------< alias
            'required|trim', //<------------------------< rule Validai
            ['required' => 'Nama wajib diisi !!',] // <-< Custom pesan kesalaha 
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                // pesan kesalahan
                'required' => 'Email wajib di isi !!',
                'valid_email' => 'Email tidak valid !',
                'is_unique' => 'Email sudah terdaftar !'
            ]
        );
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]', [
            // pesan kesalahan
            'required' => 'Wajib di isi !!',
            'min_length' => 'Password terlalu pendek',
            'matches' => 'Password tidak sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Sipedes Registration";
            $this->load->view('templats/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templats/auth_footer');
        } else {
            $data = [
                'name' => $this->input->POST('name', true),
                'email' => $this->input->POST('email', true),
                'image' => "default.jpg",
                'password' => password_hash($this->input->POST('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat registrasi akun anda Sukses. Silahkan Login!</div>');
            redirect('auth');
        }
    }
}
