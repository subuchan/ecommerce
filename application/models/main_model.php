<?php
class main_model extends CI_Model
{

    public function check_user($username, $password)
    {
        $this->load->database();
        $result = $this->db->get_where('users_table', array('username' => $username, 'password' => $password));
        return $result->row_array();
    }


    public function fetch_men_jean()
    {
        $this->load->database();
        $this->db->where('product_category', 'Jeans');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_jean($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }

    // 
    public function fetch_men_trousers()
    {
        $this->load->database();
        $this->db->where('product_category', 'Trousers');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_trousers($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }

    // 
    public function fetch_men_trackphant()
    {
        $this->load->database();
        $this->db->where('product_category', 'TrackPhants');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_trackphant($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }
    // 
    public function fetch_men_tshirts()
    {
        $this->load->database();
        $this->db->where('product_category', 'T-Shirts');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_tshirts($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }
    // 
    public function fetch_men_shirts()
    {
        $this->load->database();
        $this->db->where('product_category', 'Shirts');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_shirts($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }
    // 
    public function fetch_men_kurtas()
    {
        $this->load->database();
        $this->db->where('product_category', 'MenKurtas');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_kurtas($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }
    // 
    public function fetch_men_jackets()
    {
        $this->load->database();
        $this->db->where('product_category', 'EthnicsJackets');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_jackets($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }






    // 
    public function fetch_product($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->row_array();
    }

    // public function order_list_details($data)
//     {
//         $this->db->insert('checkout_form', $data);
//         $id = $this->db->insert_id();
//         return (isset($id)) ? $id : FALSE;
//     }
// public function insert_order($order)
//     {
//         $this->db->insert('customer_order', $order);
//         $id = $this->db->insert_id();
//         return (isset($id)) ? $id : FALSE;
//     }
// 	public function insert_order_detail($order)
//     {
//         $this->db->insert('order_details', $order);
//         $id = $this->db->insert_id();
//         return (isset($id)) ? $id : FALSE;
//     }
// public function order_list($data){
// 	$this->load->database();
// 	return $this->db->insert('order_list',$data);
// }
// public function update_qty($data){
// 	$this->load->database();
// 	return $this->db->update('order_list',$data);
// }

    // public function fetchdata_customer(){
// 	$this->load->database();
// 	return $this->db->get('checkout_form')->result();
// }

    // public function pay_check($registrationData1){
// 	$this->load->database();
// 	return $this->db->insert('payment_02',$registrationData1);
// }

    // public function verification($data){
// 	$this->load->database();
// 	return $this->db->insert('firebase',$data);
// }
// public function name_field($datass){
// 	$this->load->database();
// 	return $this->db->insert('payment_01',$datass);
// }





}
?>