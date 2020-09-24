<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {


	public function index()
	{
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->
        result();
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/mahasiswa/mahasiswa', $data);
        $this->load->view('templates/public/footer');
        }
        
        public function tambah_data()
        {
                $nrp = $this->input->post('nrp');
                $nama = $this->input->post('nama');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $alamat = $this->input->post('alamat');
                $telepon = $this->input->post('telepon');
                $tgl_lahir = $this->input->post('tgl_lahir');
                $jurusan = $this->input->post('jurusan');
                $email = $this->input->post('email');

                $data = array(
                        'nrp' => $nrp,
                        'nama' => $nama,
                        'jenis_kelamin' => $jenis_kelamin,
                        'alamat' => $alamat,
                        'telepon' => $telepon,
                        'tgl_lahir' => $tgl_lahir,
                        'jurusan' => $jurusan,
                        'email' => $email
                );

                $this->m_mahasiswa->input_data($data, 'mahasiswa');
                redirect('mahasiswa/index');
        }

        public function hapus_data($nrp)
        {
                $where = array('nrp'=>$nrp);
                $this->m_mahasiswa->hapus_data($where, 'mahasiswa');
                redirect('mahasiswa/index');
        }
        
        public function edit($nrp)
        {
                $where = array('nrp'=>$nrp);
                $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where,'mahasiswa')->result();
                $this->load->view('templates/public/head');
                $this->load->view('templates/public/header');
                $this->load->view('templates/public/sidebar');
                $this->load->view('templates/mahasiswa/edit', $data);
                $this->load->view('templates/public/footer');
        }
        
        public function update()
        {
                $nrp = $this->input->post('nrp');
                $nama = $this->input->post('nama');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $alamat = $this->input->post('alamat');
                $telepon = $this->input->post('telepon');
                $tgl_lahir = $this->input->post('tgl_lahir');
                $jurusan = $this->input->post('jurusan');
                $email = $this->input->post('email');


                $data = array(
                        'nrp' => $nrp,
                        'nama' => $nama,
                        'jenis_kelamin' => $jenis_kelamin,
                        'alamat' => $alamat,
                        'telepon' => $telepon,
                        'tgl_lahir' => $tgl_lahir,
                        'jurusan' => $jurusan,
                        'email' => $email
                );

                $where = array(
                        'nrp'=> $nrp
                );

                $this->m_mahasiswa->update_data($where,$data,'mahasiswa');
                redirect('mahasiswa/index');
        }

        public function detail($nrp)
        {
                $this->load->model('m_mahasiswa');
                $detail = $this->m_mahasiswa->detail_data($nrp);
                $data['detail'] = $detail;
                $this->load->view('templates/public/head');
                $this->load->view('templates/public/header');
                $this->load->view('templates/public/sidebar');
                $this->load->view('templates/mahasiswa/detail', $data);
                $this->load->view('templates/public/footer');
        }
        
}
?>