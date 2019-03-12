<?php
class M_timeline extends CI_Model {
    function getTimeLine() {
        $query = $this->db->get("timeline");
        return $query->result_array();
    }

    function addNewTimeline($data) {
        $this->db->insert("timeline", $data);
    }

    function edit($id, $data) {
        $this->db->where("id", $id);
		$this->db->update("timeline", $data);
    }

    function delete($id) {
        $this->db->where("id", $id);
		$this->db->delete("timeline");
    }
}
?>