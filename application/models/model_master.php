<?php
class Model_master extends CI_Model
{

    //  GET DATA
    function getAllDepot()
    {
        return $this->db->query("select * from tbl_depot")->result();
    }

    function getAllPengguna()
    {
        return $this->db->query("select * from tbl_pengguna")->result();
    }
    function getAllPenyakit()
    {
        return $this->db->query("select * from tbl_penyakit")->result();
    }
    function getAllGejala()
    {
        return $this->db->query("select * from tbl_gejala")->result();
    }
    function getAllPengetahuan()
    {
        return $this->db->query("select * from tbl_pengetahuan")->result();
    }
    function getPG()
    {
        return $this->db->query("select g.poin_gejala from tmp_hasil as h, tbl_gejala as g where h.kd_gejala=g.kd_gejala and h.poin_gejala='0'")->result();
    }
    function getHasil()
    {
        return $this->db->query("select h.kd_penyakit, h.kd_gejala, h.poin_gejala,h.poin_user, g.nama_gejala from tmp_hasil as h, tbl_gejala as g where h.kd_gejala=g.kd_gejala and h.poin_gejala>'0'")->result();
    }
    function getPS()
    {
        return $this->db->query("select * from tmp_hasil as h, tbl_penyakit as p, tbl_gejala as g where h.kd_penyakit=p.kd_penyakit and h.kd_gejala=g.kd_gejala and h.poin_gejala>'0' limit 1")->result();
    }
    function getUser()
    {
        return $this->db->query("select id from user order by id desc limit 1")->result();
    }
    function getPenyakit()
    {
        if (isset($_POST['kd_penyakit'])) {
            $penyakit = $_POST['kd_penyakit'];
            $kd = $this->db->query("select * from tbl_pengetahuan where kd_penyakit='" . $penyakit . "'")->row_array();
            $insert = "INSERT INTO tmp_relasi (kd_penyakit, kd_gejala) SELECT kd_penyakit, kd_gejala FROM tbl_pengetahuan WHERE kd_penyakit='" . $kd['kd_penyakit'] . "'";
            $this->db->query($insert);
        } else {
            $penyakit = 'null';
        }
        $this->db->select('*');
        $this->db->from('tbl_pengetahuan');
        $this->db->where('kd_penyakit = ', '' . $penyakit . '');
        $this->db->limit('1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $out = $query->result();
            return $out;
        } else {
            return array();
        }
    }
    function getRelasi()
    {
        return $this->db->query("select * from tmp_relasi as r, tbl_gejala as g where r.kd_gejala=g.kd_gejala")->result();
    }

    //  GET DATA BY ID
    function getPenyakitById($id)
    {
        $param = array('kd_penyakit' => $id);
        return $this->db->get_where('tbl_penyakit', $param);
    }
    function getPenggunaById($id)
    {
        $param = array('id' => $id);
        return $this->db->get_where('tbl_pengguna', $param);
    }
    function getGejalaById($id)
    {
        $param = array('kd_gejala' => $id);
        return $this->db->get_where('tbl_gejala', $param);
    }
    function getGejalaByIds($id)
    {
        // $param = $this->db->query('SLECT * FROM ')
        // return $this->db->get_where('tbl_gejala', ['kd_gejala'=>$id]);
    }
    function getDPengetahuanById($id)
    {
        $param = array('kd_pengetahuan' => $id);
        return $this->db->get_where('tbl_pengetahuan', $param);
    }
    function getPengetahuanById($id)
    {
        if (isset($_GET['kd_penyakit'])) {
            $kd_penyakit = $_GET['kd_penyakit'];
        } else {
        }
        $this->db->select('*');
        $this->db->from('tbl_pengetahuan as pg');
        $this->db->from('tbl_gejala as gj');
        $this->db->where('kd_penyakit', '' . $kd_penyakit . '');
        $this->db->where('pg.kd_gejala = gj.kd_gejala');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $out = $query->result();
            return $out;
        } else {
            return array();
        }
    }
    function getPertanyaanById($id)
    {
        if (isset($_GET['kd_penyakit'])) {
            $kd_penyakit = $_GET['kd_penyakit'];
        } else {
        }
        $this->db->select('*');
        $this->db->from('tbl_pengetahuan');
        $this->db->where('kd_penyakit', '' . $kd_penyakit . '');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $out = $query->result();
            return $out;
        } else {
            return array();
        }
    }

    //  INSERT DATA
    function insertPenyakit($data)
    {
        $query = $this->db->insert('tbl_penyakit', $data);
        return $query;
    }
    function insertRelasi($data)
    {
        $query = $this->db->insert('tmp_relasi', $data);
        return $query;
    }
    function insertHasil($data)
    {
        $query = $this->db->insert('tbl_hasil', $data);
        return $query;
    }
    function insertGejala($data)
    {
        $query = $this->db->insert('tbl_gejala', $data);
        return $query;
    }
    function insertPengguna($data)
    {
        $query = $this->db->insert('tbl_pengguna', $data);
        return $query;
    }
    function insertPengetahuan($data)
    {
        $query = $this->db->insert('tbl_pengetahuan', $data);
        return $query;
    }
    function simpanRelasi()
    {
        $kdpenyakit         = $this->input->post('kd_penyakit');
        $penyakit           = $this->db->get_where('tbl_pengetahuan', array('kd_penyakit' => $kdpenyakit))->row_array();
        $data           = array(
            'kd_penyakit' => $kdpenyakit,
            'kd_gejala' => $penyakit['kd_gejala']
        );
        $this->db->insert('tmp_relasi', $data);
    }
    function insertUser($data)
    {
        $query = $this->db->insert('user', $data);
        return $query;
    }
    function insertDiagnosa($data)
    {
        $this->db->insert('diagnosa', $data);
        $sql = $this->db->query("SELECT id FROM diagnosa ORDER BY id DESC LIMIT 1")->result();
        return $sql;
    }
    function insertDiagnosaGejala($data)
    {
        return $this->db->insert('diagnosa_gejala', $data);
    }

    //  UPDATE DATA
    function updatePenyakit($data, $id)
    {
        $this->db->where('kd_penyakit', $id);
        $this->db->update('tbl_penyakit', $data);
    }
    function updateGejala($data, $id)
    {
        $this->db->where('kd_gejala', $id);
        $this->db->update('tbl_gejala', $data);
    }
    function updatePengguna($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_pengguna', $data);
    }
    function updatePengetahuan($data, $id)
    {
        $this->db->where('kd_pengetahuan', $id);
        $this->db->update('tbl_pengetahuan', $data);
    }

    //  DELETE DATA
    function deletePenyakit($id)
    {
        $this->db->where('kd_penyakit', $id);
        $delete = $this->db->delete('tbl_penyakit');
        return $delete;
    }
    function deleteGejala($id)
    {
        $this->db->where('kd_gejala', $id);
        $delete = $this->db->delete('tbl_gejala');
        return $delete;
    }
    
    function deletePengetahuan($id)
    {
        $this->db->where('kd_pengetahuan', $id);
        $delete = $this->db->delete('tbl_pengetahuan');
        return $delete;
    }
    function deletePengguna($id)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete('tbl_pengguna');
        return $delete;
    }

    //  KODE PENYAKIT
    function getKodePenyakit()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_penyakit,3)) as kd_max from tbl_penyakit");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        return "P" . $kd;
    }
    //  KODE GEJALA	
    function getKodeGejala()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_gejala,3)) as kd_max from tbl_gejala");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        return "G" . $kd;
    }
    //  KODE PENGETAHUAN	
    function getKodePengetahuan()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_pengetahuan,3)) as kd_max from tbl_pengetahuan");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        return "PG" . $kd;
    }
    function getGroupPengetahuan($value)
    {
        $sql =  $this->db->query("SELECT pyt.nama_penyakit FROM tbl_pengetahuan p 
        JOIN tbl_gejala g ON p.kd_gejala = g.kd_gejala
        JOIN tbl_penyakit pyt ON p.kd_penyakit = pyt.kd_penyakit
        WHERE p.kd_gejala IN ($value)
        GROUP BY p.kd_penyakit ORDER BY p.kd_penyakit");

        //   $result = $this->conn->query($sql);

        if (isset($sql)) {
            // merubah data tabel menjadi array
            foreach ($sql->result() as $penyakit) {
                $rows[] = array('nama_penyakit' => $penyakit->nama_penyakit);
            }


            return $rows;
        }
    }

    function distinctGejala($gejala)
    {
        $sql = $this->db->query("SELECT DISTINCT kd_gejala from tbl_pengetahuan where kd_gejala IN ($gejala)");
        foreach ($sql->result() as $penyakit) {
            $rows[] = $penyakit->kd_gejala;
        }
        return $rows;
    }

    function getKemungkinanPenyakit($value)
    {
        $sql = $this->db->query(" SELECT pyt.nama_penyakit, p.kd_pengetahuan FROM tbl_pengetahuan p 
        JOIN tbl_gejala g ON p.kd_gejala = g.kd_gejala
        JOIN tbl_penyakit pyt ON p.kd_penyakit = pyt.kd_penyakit
        WHERE p.kd_gejala IN ($value)
        ");

        if (isset($sql)) {
            // merubah data tabel menjadi array
            foreach ($sql->result() as $penyakit) {
                $rows[] = array(
                    'nama_penyakit' => $penyakit->nama_penyakit,
                    'kode_pengetahuan' => $penyakit->kd_pengetahuan
                );
            }


            return $rows;
        }
    }

    function getListPenyakit($value)
    {
        $sql = $this->db->query("
        SELECT * FROM tbl_pengetahuan p 
        JOIN tbl_gejala g ON p.kd_gejala = g.kd_gejala
        JOIN tbl_penyakit pyt ON p.kd_penyakit = pyt.kd_penyakit
        WHERE p.kd_pengetahuan IN ($value)
        ");
        if (isset($sql)) {
            // merubah data tabel menjadi array
            foreach ($sql->result() as $penyakit) {
                $rows[] = array(
                    'kd_pengetahuan' => $penyakit->kd_pengetahuan,
                    'kd_penyakit' => $penyakit->kd_penyakit,
                    'kd_gejala' => $penyakit->kd_gejala,
                    'pertanyaan' => $penyakit->pertanyaan,
                    'mb' => $penyakit->Mb,
                    'md' => $penyakit->Md
                );
            }
            // var_dump($sql->result());die();
            return $rows;
        }
    }

    function hasilCFTertinggi($daftarCF, $groupKemungkinanPenyakit)
    {
        for ($i = 0; $i < count($groupKemungkinanPenyakit); $i++) {
            $namaPenyakit = $groupKemungkinanPenyakit[$i]['nama_penyakit'];

            for ($j = 0; $j < count($daftarCF[$namaPenyakit]); $j++) {
                $merubahIndexCF = max($daftarCF[$namaPenyakit]);
            }
        }
        return $merubahIndexCF;
    }

    function hasilAkhir($daftarCF, $groupKemungkinanPenyakit)
    {
        $hasil = [];
        for ($i = 0; $i < count($groupKemungkinanPenyakit); $i++) {
            $namaPenyakit = $groupKemungkinanPenyakit[$i]['nama_penyakit'];
            for ($j = 0; $j < count($daftarCF[$namaPenyakit]); $j++) {
                $merubahIndexCF[$i]  = max($daftarCF[$namaPenyakit]);
            }
        }
        for ($k = 0; $k < count($groupKemungkinanPenyakit); $k++) {
            $hasilMax = max($merubahIndexCF);
            $namaPenyakit = $groupKemungkinanPenyakit[$k]['nama_penyakit'];
            if ($merubahIndexCF[$k] == $hasilMax) {
                $penyakit = '"' . $namaPenyakit . '"';
                $sql = $this->db->query("SELECT * FROM tbl_penyakit p WHERE p.nama_penyakit = $penyakit");

                $hasil = array(
                    'kd_penyakit' => $sql->result()[0]->kd_penyakit,
                    'nama_penyakit' => $namaPenyakit,
                    'nilai_cf' => $merubahIndexCF[$k],
                    'penyebab' => $sql->result()[0]->penyebab,
                    'solusi' => $sql->result()[0]->solusi,
                );
            }
        }
        return $hasil;
    }

    function getGejala($value)
    {
        $sql = $this->db->query("SELECT nama_gejala, kd_gejala FROM tbl_gejala p WHERE kd_gejala IN ($value)");
        foreach ($sql->result() as $gejala) {
            $hasil[] = array(
                'kd_gejala' => $gejala->kd_gejala,
                'nama_gejala' => $gejala->nama_gejala
            );
        }
        return $hasil;
    }

    function getDiagnosa()
    {
        return $this->db->query("SELECT * FROM user JOIN diagnosa ON user.id = diagnosa.id_user JOIN tbl_penyakit ON diagnosa.kd_penyakit = tbl_penyakit.kd_penyakit")->result();
    }

    function getDiagnosaAll($idUser)
    {
        return $this->db->query("SELECT * FROM user JOIN diagnosa ON user.id = diagnosa.id_user JOIN tbl_penyakit ON diagnosa.kd_penyakit = tbl_penyakit.kd_penyakit JOIN diagnosa_gejala ON diagnosa.id = diagnosa_gejala.id_diagnosa JOIN tbl_gejala ON diagnosa_gejala.kd_gejala = tbl_gejala.kd_gejala WHERE user.id = $idUser")->result();
    }
}
