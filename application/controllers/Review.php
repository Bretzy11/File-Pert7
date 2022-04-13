<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('nsiswa', 'Nama Siswa',
    'required', [
        'required' => 'Nama Siswa harus di isi'
    ]);
    $this->form_validation->set_rules('nis', 'Nis',
    'required', [
        'required' => 'Nis harus di isi'
    ]);
    $this->form_validation->set_rules('kelas', 'Kelas',
    'required', [
        'required' => 'Kelas harus di isi'
    ]);
    $this->form_validation->set_rules('tlahir', 'Tanggal Lahir',
    'required', [
        'required' => 'Tanggal Lahir harus di isi'
    ]);
    $this->form_validation->set_rules('tmptlahir', 'Tempat Lahir',
    'required', [
        'required' => 'Tempat Lahir harus di isi'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat',
    'required', [
        'required' => 'Alamat harus di isi'
    ]);
    $this->form_validation->set_rules('jkelamin', 'Jenis Kelamin',
    'required', [
        'required' => 'Jenis Kelamin harus di isi'
    ]);
    $this->form_validation->set_rules('agama', 'Agama',
    'required', [
        'required' => 'Agama harus di isi'
    ]);
        if($this->form_validation->run() == false) {

        $this->load->view('review/v_input');
        } else {
            $data = [
                'nsiswa' => $this->input->post('nsiswa'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tlahir' => $this->input->post('tlahir'),
                'tmptlahir' => $this->input->post('tmptlahir'),
                'alamat' => $this->input->post('alamat'),
                'jkelamin' => $this->input->post('jkelamin'),
                'agama' => $this->input->post('agama'),
            ];

            $this->load->view('review/v_output.php', $_POST);
            var_dump($_POST);
            die;
        }

        }
    }
    
