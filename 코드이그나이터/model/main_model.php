<?php
class Main_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function gets(){
        return $this->db->query('SELECT * FROM topic')->result_array(); /* topic 이라는 테이블을 반환한다. */
    }
    public function practice($topic_id){
        return $this->db->get_where('topic', array('id'=>$topic_id))->row(); /* 전체가 아닌 하나의 데이터를 가져올땐 row(), 전체는 result() */
        // == return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id);
    }
}
