<?php

class Tamu extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Tamu';
        $data['tamu'] = $this->model('Tamu_model')->getAllTamu();
        $this->view('templates/header', $data);
        $this->view('tamu/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Tamu';
        $data['tamu'] = $this->model('Tamu_model')->getTamuById($id);
        $this->view('templates/header', $data);
        $this->view('tamu/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Tamu_model')->tambahDataTamu($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/tamu');
            exit;
        } else {
            Flasher::setFlash('gagl', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/tamu');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Tamu_model')->hapusDataTamu($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/tamu');
            exit;
        } else {
            Flasher::setFlash('gagl', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/tamu');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model('Tamu_model')->getTamuById($_POST['id']));
    }
}