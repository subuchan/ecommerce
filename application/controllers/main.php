<?php
class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->helper('url');
		$this->load->model('main_model');
		
	}
	public function login() {
		$this->load->view('header');
		$this->load->view('login');
	}
	public function login_user() {
        extract($_POST);
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('main_model');
        $result = $this->main_model->check_user($username, $password);
        if ($result) {
            $this->session->set_userdata('user', $result);
            redirect(base_url('main/index/'));
        } else {
            echo 'invalid username password.. Please check your username and password.';
        }
	}
	public function user_logout() {
		$this->session->unset_userdata('user');
		redirect(base_url('main/index/'));
	}

    public function index() {
		if($this->session->userdata('user')){
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
		}
		else {
			$this->load->view('header');
		    $this->load->view('index');
		    $this->load->view('footer');
		}
	}
	public function men_jeans() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jean();
			$this->load->view('men/jeans/men-jeans',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jean();
			$this->load->view('men/jeans/men-jeans',$return);
			$this->load->view('footer');
		}
		
	}
	public function jean_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_jean($id);
		$this->load->view('men/jeans/jean-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function men_trousers() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_trousers();
			$this->load->view('men/trousers/men-trousers',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_trousers();
			$this->load->view('men/trousers/men-trousers',$return);
			$this->load->view('footer');
		}
		
	}
	public function trousers_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_trousers($id);
		$this->load->view('men/trousers/trousers-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function men_trackphant() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_trackphant();
			$this->load->view('men/trackphant/men-trackphant',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_trackphant();
			$this->load->view('men/trackphant/men-trackphant',$return);
			$this->load->view('footer');
		}
		
	}
	public function trackphant_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_trackphant($id);
		$this->load->view('men/trackphant/trackphant-desc',$return);
		$this->load->view('footer');
	}
	// 

	public function men_tshirts() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_tshirts();
			$this->load->view('men/tshirts/men-tshirts',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jean();
			$this->load->view('men/tshirts/men-tshirts',$return);
			$this->load->view('footer');
		}
		
	}
	public function tshirts_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_tshirts($id);
		$this->load->view('men/tshirts/tshirts-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function men_shirts() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_shirts();
			$this->load->view('men/shirts/men-shirts',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_shirts();
			$this->load->view('men/shirts/men-shirts',$return);
			$this->load->view('footer');
		}
		
	}
	public function shirts_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_shirts($id);
		$this->load->view('men/shirts/shirts-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function men_kurtas() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_kurtas();
			$this->load->view('men/kurtas/men-kurtas',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_kurtas();
			$this->load->view('men/kurtas/men-kurtas',$return);
			$this->load->view('footer');
		}
		
	}
	public function kurtas_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_kurtas($id);
		$this->load->view('men/kurtas/kurtas-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function men_jackets() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jackets();
			$this->load->view('men/jackets/men-jackets',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jackets();
			$this->load->view('men/jackets/men-jackets',$return);
			$this->load->view('footer');
		}
		
	}
	public function jackets_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_jackets($id);
		$this->load->view('men/jackets/jackets-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function shopping_cart() {
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer');
	}

	public function option(){
		extract($_POST);
		echo "<pre>";
		print_r($_POST);
	}
	public function add_cart($id){
		if($user_id=$this->session->userdata('user')){ 
		$this->load->library('cart');
		$this->load->model('main_model');
		$products=$this->main_model->fetch_product($id);
		  $data = array(
			'id'=> $products['id'], 
			'qty'     => 1, 
			'price'   =>$products['product_price'],
			'name'=> $products['product_name'],
			'description'=>$products['product_description'],
			'image'=>$products['product_img1'],
			'user_id' =>$user_id['id'],
			// 'options'=> array(
			// 'product_size1' =>  $products['product_size1'],
			// 'product_size2'	=>$products ['product_size2'],
			// 'product_size3' =>	$products['product_size3'],
			// 'product_size4'=> $products ['product_size4'],
			// )
			
			// 'size'=>array(
			// 	)
		  );
	//    $result= $this->Regmain_Model->order_list($data);
	    // 		echo "<pre>";
		// print_r($data); die; 
	 $data1= $this->cart->insert($data);
	//    $data1['cartItems']= $this->cart->contents( $tt);
	   echo "<pre>";
	   print_r($data1); 
	   redirect('main/addtocart');
		}
		// else{
			// redirect('/');     
			
		// }
	}
	public function addtocart(){
		if($this->session->        userdata('user')){
		$this->load->library('cart');
		$data=array();
		$data['cartItems']= $this->cart->contents( );
//    echo "<pre>";
// 	   print_r($data); 
        $this->load->view('header');
		$this->load->view('cart',$data);
		$this->load->view('footer');
		}
		else {
			echo 'no items found login first';
		}
	 }
	
	 public function cart(){
		$update = 0;
		// Get cart item info
		$qty = $this->input->post('qty');
		$rowid = $this->input->post('rowid');
		
		// Update item in the cart
		if(!empty($rowid) && !empty($qty)){
			$data = array(
				'rowid' => $rowid,
				'qty'   => $qty
			);
			// $this->Regmain_Model->update_qty($data);
			$update = $this->cart->update($data);
		}
		
		// Return response
		redirect('main/addtocart');
	 }
	
	public function cart_delete($rowid){
		$this->cart->remove($rowid);
		redirect('main/addtocart');
	}
	
} 
?>
