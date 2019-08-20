<?php

 class User_model extends CI_Model {

    public function get_users($user_id, $username){

       $this->db->where([
         'id' => $user_id,
       'username' => $username
     ]);


    $query = $this->db->get('users');
     return $query->result();



       //  $this->db->where('id', $user_id);
     //$query = $this->db->query("SELECT * FROM users");
    // $query =  $this->db->get('users');
 //      return $query->num_rows();// this will give rows number
  //    return $query->num_fields();// this will give coloum
    }

 public function create_users($data) {

   $this->db->insert('users', $data);

 }

 public function update_users($data, $id) {

     $this->db->where(['id'=> $id]);

   $this->db->update('users', $data);

 }

 public function delete_users($id)
 {
      $this->db->where(['id' => $id]);
      $this->db->delete('users');
 }




 }

 ?>
