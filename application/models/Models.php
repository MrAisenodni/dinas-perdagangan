<?php

/**
 *
 */
class Models extends CI_model
{

    public $table = "transaksi";

    public function __construct()
    {
        parent::__construct();
    }


    public function format_tanggal($tgl)
    {
        $y    = date('Y', strtotime($tgl));
        $d    = date('d', strtotime($tgl));
        $dt_m = date('m', strtotime($tgl));
        $m    = $this->month($dt_m);
        $date = $d . ' ' . $m . ' ' . $y;
        return $date;
    }

    public function month($dt)
    {
        $array = array(
            '01' => 'Januari',
            '02' => 'Febuari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        );
        return $array[$dt];
    }

    public function format_harga($harga)
    {
        $new = number_format($harga, 0, '.', '.');
        return 'Rp. ' . $new;
    }



    public function get_laporan($tgl1, $tgl2)
    {
        $this->db->from('bahanpokok');
        $this->db->where('DATE(bahanpokok.tanggalbahan) BETWEEN "' . $tgl1 . '" AND "' . $tgl2 . '"');
        return $this->db->get()->result();
    }
    public function get_laporan_pengaduan($tgl1, $tgl2, $jenis)
    {
        $this->db->from('pengaduan');
        $this->db->where('DATE(pengaduan.created_date_time) BETWEEN "' . $tgl1 . '" AND "' . $tgl2 . '"AND pengaduan.idjenis = "'.$jenis.'"');
        return $this->db->get()->result();
    }


    public function cariadmin($where = array())
    {
        $this->db->from('admin');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function getadminbyid($where = array())
    {
        $this->db->from('admin');
        $this->db->where($where);
        return $this->db->get()->result();
    }
    public function getberitabyid($where = array())
    {
        $this->db->from('berita');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function getfotobyid($where = array())
    {
        $this->db->from('galerifoto');
        $this->db->where($where);
        return $this->db->get()->result();
    }
    public function getvideobyid($where = array())
    {
        $this->db->from('galerivideo');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function getpengaduanbyid($where = array())
    {
        $this->db->from('pengaduan');
        $this->db->where($where);
        return $this->db->get()->result();
    }
    public function getsopbyid($where = array())
    {
        $this->db->from('Keputusan');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function getbahanpokokbyid($where = array())
    {
        $this->db->from('bahanpokok');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function admin($where = array())
    {
        $this->db->from('admin'); //select*from
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function berita($where = array())
    {
        $this->db->from('berita'); //select*from
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function galerifoto($where = array())
    {
        $this->db->from('galerifoto'); //select*from
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function galerivideo($where = array())
    {
        $this->db->from('galerivideo'); //select*from
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function pengaduan($where = array())
    {
        $this->db->from('pengaduan'); //select*from
        $this->db->where($where);
        return $this->db->get()->result();
    }
    public function jenislayanan()
    {
        $this->db->from('jenislayanan'); //select*from
        return $this->db->get()->result();
    }

    public function keputusan($where = array())
    {
        $this->db->from('keputusan'); //select*from
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function bahanpokok($where = array())
    {
        $this->db->from('bahanpokok'); //select*from
        $this->db->order_by('tanggalbahan', 'desc');
        $this->db->group_by('namabarang');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function insert($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }


    public function get_where($where = array())
    {
        $this->db->from('pengaduan');
        $this->db->where($where);
        return $this->db->get()->row();
    }

    public function get_where2($where = array())
    {
        $this->db->from('bahanpokok');
        $this->db->where($where);
        return $this->db->get()->row();
    }

    public function report($id)
    {
        $query = $this->db->query("SELECT * , AVG(`hargahariini`) as nilai,MONTH(tanggalbahan) AS 'bulan' FROM bahanpokok where namabarang='$id' GROUP BY YEAR(`tanggalbahan`), MONTH(`tanggalbahan`)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {

                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function bulan($id)
    {
        if ($id == "1") {
            $bulan = "januari";
        } elseif ($id == "2") {
            $bulan = "Februari";
        } elseif ($id == "3") {
            $bulan = "Maret";
        } elseif ($id == "4") {
            $bulan = "April";
        } elseif ($id == "5") {
            $bulan = "Mei";
        } elseif ($id == "6") {
            $bulan = "Juni";
        } elseif ($id == "7") {
            $bulan = "Juli";
        } elseif ($id == "8") {
            $bulan = "Agustus";
        } elseif ($id == "9") {
            $bulan = "September";
        } elseif ($id == "10") {
            $bulan = "Oktober";
        } elseif ($id == "11") {
            $bulan = "November";
        } elseif ($id == "12") {
            $bulan = "Desember";
        } else {
            $bulan = "";
        }
        return $bulan;
    }
}
