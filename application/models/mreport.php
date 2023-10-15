<?php
class mreport extends CI_Model {

    public function get()
    {
        $this->db->select('*');
        $this->db->from('buyback-dj');
        $query=$this->db->get();
        return $query;
        //$query=$this->db->query("select * from `buyback-dj`");
        //return $query;
    }

    public function total()
    {
        $query=$this->db->query("select sum(cogm) sum_cogm,sum(pricenet) sum_pricenet,sum(priceus) sum_priceus,
        sum(weightg) sum_weightg,sum(weightm) sum_weightm from `buyback-dj`");
        return $query;
    }

}
?>