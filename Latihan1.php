<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang....Selamat belajar web Programming</h1>";
    }
    public function penjumlahan($n1, $n2)
    {
        /*$this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil penjumlahan $n1 + $n2 = $hasil";*/

        $this->load->model('Model_latihan1');
        $data = array(
            'nilai1' => $n1,
            'nilai2' => $n2,
            'hasil' => $this->Model_latihan1->jumlah($n1, $n2)
        );
        $this->load->view('view-latihan1', $data);
    }
}
