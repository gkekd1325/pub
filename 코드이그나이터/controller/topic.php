<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    function __construct(){ /* 생성자, 로드될 때 사용  ,중복제거*/
        parent::__construct();
        $this->load->database(); /* 데이터베이스 라이브러리 로드 */        
        $this->load->model('main_model');   
    }
    public function index(){
             
        $sub = $this->main_model->gets(); /* main_model 안에 있는 gets() 함수가 실행된다 */
        // foreach($sub as $entry){
        //     var_dump($entry);
        // }
        $this->load->view('head');
        $this->load->view('main'); 
        $this->load->view('topic_list', array('mains'=>$sub)); /* view파일  topic_list의 $mains 함수에 $sub전달 */
        $this->load->view('footer');
        $this->load->view('experiment'); /* 실험 */
    }
    public function get($id){
        $sub = $this->main_model->gets();
        $topic =$this->main_model->practice($id);
        $this->load->view('head');
        $this->load->view('topic_list', array('mains'=>$sub));
        $data = array('topic'=>$topic);
        $this->load->helper(array('url', 'HTML')); 
        $this->load->view('get', $data);
        $this->load->view('footer');
    }
}
?>