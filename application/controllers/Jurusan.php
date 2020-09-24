<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function index()
	{
        $data['jurusan'] = $this->m_jurusan->tampil_data()->
        result();
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/jurusan/jurusan', $data);
        $this->load->view('templates/public/footer');
    }

    public function tambah_data()
    {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $akreditasi= $this->input->post('akreditasi');
            $kepala_jurusan = $this->input->post('kepala_jurusan');

            $data = array(
                    'id' => $id,
                    'nama' => $nama,
                    'akreditasi' => $akreditasi,
                    'kepala_jurusan' => $kepala_jurusan
            );

            $this->m_jurusan->input_data($data, 'jurusan');
            redirect('jurusan/index');
    }

    public function hapus_data($id)
    {
            $where = array('id'=>$id);
            $this->m_jurusan->hapus_data($where, 'jurusan');
            redirect('jurusan/index');
    }
    
    public function edit($id)
    {
            $where = array('id'=>$id);
            $data['jurusan'] = $this->m_jurusan->edit_data($where,'jurusan')->result();
            $this->load->view('templates/public/head');
            $this->load->view('templates/public/header');
            $this->load->view('templates/public/sidebar');
            $this->load->view('templates/jurusan/edit', $data);
            $this->load->view('templates/public/footer');
    }
    
    public function update()
    {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $akreditasi = $this->input->post('akreditasi');
            $kepala_jurusan = $this->input->post('kepala_jurusan');


            $data = array(
                    'id' => $id,
                    'nama' => $nama,
                    'akreditasi' => $akreditasi,
                    'kepala_jurusan' => $kepala_jurusan
            );

            $where = array(
                    'id'=> $id
            );

            $this->m_jurusan->update_data($where,$data,'jurusan');
            redirect('jurusan/index');
    }
        
}
?>