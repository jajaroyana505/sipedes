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
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email wajib di isi !!',
            'valid_email' => 'Email tidak valid !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login page';
            $this->load->view('templats/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templats/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        var_dump($user);
        die;
    }

    public function registration()
    {
        // valdasi form 
        $this->form_validation->set_rules(
            'name', //<---------------------------------< nama form
            'Name', //<---------------------------------< alias
            'required|trim', //<------------------------< rule Validai
            ['required' => 'Username wajib diisi !!',] // <-< Custom pesan kesalaha 
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                // pesan kesalahan
                'required' => 'Email wajib di isi !',
                'valid_email' => 'Email tidak valid !',
                'is_unique' => 'Email sudah terdaftar !'
            ]
        );
        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|trim|numeric|max_length[16]|min_length[16]|is_unique[penduduk.nik]',
            [
                // pesan kesalahan
                'required' => 'NIK wajib di isi !!',
                'min_length' => 'Panjang NIK minimal 16 angaka!',
                'max_length' => 'Panjang NIK maximal 16 angaka!',
                'numeric' => 'Hanya boleh diisi dengan angka',
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

            $this->input->post('nik');
            $data1 = [
                'email' => $this->input->POST('email', true),
                'image' => "default.jpg",
                'password' => password_hash($this->input->POST('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $data2 = [
                'nama' => $this->input->POST('name', true),
                'nik' => $this->input->POST('nik', true),
                'tgl_lahir' => 'lahir',
                'agama' => '-',
                'kewarganegaraan' => 'indonesia',
                'pekerjaan' => '-',
                'alamat' => '-'
            ];

            $this->db->insert('user', $data1);
            $this->db->insert('penduduk', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat registrasi akun anda Sukses. Silahkan Login!</div>');
            redirect('auth');
        }
    }
}
