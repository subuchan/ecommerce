<?php 
class Admin extends CI_Controller {
    public function index() {
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
    
    
    public function upload_mens_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/mens_product');
        $this->load->view('admin/footer');
    }

    public function men_product_form() {
        extract($_POST);
        extract($_FILES);
        $file_name1 = $_FILES['product_img1']['name'];
        $file_name2 = $_FILES['product_img2']['name'];
        $file_name3 = $_FILES['product_img3']['name'];

        $config = [
            'upload_path' => './upload/men/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_img1') && $this->upload->do_upload('product_img1')) {
        } elseif (!$this->upload->do_upload('product_img2') && $this->upload->do_upload('product_img2')) {
        }
        elseif (!$this->upload->do_upload('product_img3') && $this->upload->do_upload('product_img3')) {
        }
        $data=[
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$file_name1,
            'product_img2'=>$file_name2,
            'product_img3'=>$file_name3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result=$this->admin_model->mens_product($data);
        if($result) {
            redirect(base_url('admin/upload_mens_product'));
        }
        else {
            echo 'error in uploading';
        }
    }












    public function upload_womens_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/womens_product');
        $this->load->view('admin/footer');
    }
    public function upload_kids_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/kids_product');
        $this->load->view('admin/footer');
    }
    public function upload_home_kitchen_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/home_kitchen_product');
        $this->load->view('admin/footer');
    }
    public function upload_beauty_health_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/beauty_health_product');
        $this->load->view('admin/footer');
    }
    public function view_mens_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/view_details/mens_product');
        $this->load->view('admin/footer');
    }
    public function view_womens_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/view_details/womens_product');
        $this->load->view('admin/footer');
    }
    public function view_kids_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/view_details/kids_product');
        $this->load->view('admin/footer');
    }
    public function view_home_kitchen_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/view_details/home_kitchen_product');
        $this->load->view('admin/footer');
    }
    public function view_beauty_health_product() {
        $this->load->view('admin/header');
        $this->load->view('admin/view_details/beauty_health_product');
        $this->load->view('admin/footer');
    }
}
?>