<?php

/**
 * Created by PhpStorm.
 * User: Mobile Innovation 3
 * Date: 12/03/2018
 * Time: 21.36
 */
class Ajax extends MY_Controller
{

    public function prodi(){
        if (!empty($_GET['id'])){ $id = $_GET['id'];
            $this->db->where("id_fakultas",intval($id));
            $this->db->select("id_prodi,nama_prodi");
            $query = $this->db->get("prodi");
            echo json_encode($query->result_array());
        }

    }

}