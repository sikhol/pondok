<?php
class Pondok_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}
	public function set_kirim(){
	 $this->load->helper('url');

	 $data=array(
		 'nama' => $this->input->post('nama'),
		 'email' => $this->input->post('email'),
		 'text'=> $this->input->post('text')
	 );
	 return $this->db->insert('kontak', $data);

 }

	// public function get_pondok(){
	//     $this->db->select('*'); //mengambil semua data dari tabel data_users dan users
	//     $this->db->from('tabungan'); //dari tabel data_users
	//     $this->db->join('santri', 'santri.id = tabungan.nama'); //menyatukan tabel users menggunakan left join
	//     $data = $this->db->get(); //mengambil seluruh data
	// 		return $data->result_array();
	//   }
	//
	// public function get_pembayaran(){
	// 		$this->db->select('*'); //mengambil semua data dari tabel data_users dan users
	// 		$this->db->from('pembayaran'); //dari tabel data_users
	// 		$this->db->join('santri', 'santri.id = pembayaran.nama'); //menyatukan tabel users menggunakan left join
	// 		$data = $this->db->get(); //mengambil seluruh data
	// 		return $data->result_array();
	// 		}
	// // public function get_nis(){
	// // 	  $this->db->select('*'); //mengambil semua data dari tabel data_users dan users
	// // 	  $this->db->from('syahriah'); //dari tabel data_users
	// // 	  $this->db->join('santri', 'santri.id =syahriah.nama');
	// // 		$this->db->join('tabungan', 'tabungan.id_tabungan =syahriah.jumlah_tabungan');
	// // 		$this->db->join('pembayaran', 'pembayaran.id_pembayaran =syahriah.jumlah_pembayaran');  //menyatukan tabel users menggunakan left join
  // //   	$data = $this->db->get(); //mengambil seluruh data
	// // 		return $data->result_array();
	// // 	  }
	//
	//
	//
	// 	public function update_pembayaran($id, $data)
	// 	{
	//
	// 	//$textArea=$data['textdata'];
	//
	// 	$this->db->set($data);
	// 	$this->db->where('pembayaran.id_pembayaran',$id);
	// 	$this->db->update('pembayaran');
	//
	// 	$query=$this->db->get();
	// 	return $query->result();
	// 	}
	//
	public function get_detail($id= FALSE){
		if ($id === FALSE) {
				$this->db->limit(6);
			$query = $this->db->order_by('id','desc')->get('artikel');



			return $query->result_array();
		}
		$query=$this->db->get_where('artikel',array('id' => $id));

		return $query->row_array();

	}


	public function get_santri($table){
		$query=$this->db->order_by('id','Desc')->get($table);
		return $query->result_array();
	}


	 public function get_counter($table){
	 	$query=$this->db->get($table);
	 	return $query->result_array();
	 }




   	public function insert($data,$table)
   	{
    	$this->db->insert($table, $data);
   	}


   	public function counter($table) {
   		$dnow = date('Y-m-d');
   		$cek = $this->db->get_where($table,array('date'=>$dnow))->num_rows();
   		if ($cek > 0) {
   			$this->db->set('counter','counter+1', FALSE)->where('date',$dnow)->update($table);
   		} else {
   			$this->db->insert($table, array('date'=>$dnow, 'counter'=>1));
   		}
	 }

	 public function get_pondok_id($id,$table){
	  $query=$this->db->get_where($table, array('id	'=>$id));
	  return $query->row_array();
	 }





	  public function update($id, $data,$table){
	  	 $this->load->helper('url');

	  	 $this->db->where('id',$id);
	  	 return $this->db->update($table, $data);

	  	}







	 	public function delete_data($id,$table){
	 	 return $this->db->delete($table,array('id'=>$id));
	 	}



		public function cek_user($data) {
				$query = $this->db->get_where('login', $data);
				return $query;
			}









}
