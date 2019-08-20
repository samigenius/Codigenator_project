<?php
 class Users extends CI_Controller {

public function login(){

  $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
 if($this->form_validation->run()==FALSE) {
   $data = array(
       'errors' => validation_errors()
   );
   $this->session->set_flashdata($data);
   redirect('home');
 }

//  echo $this->input->post('username');
}






  //   public function show($user_id) {
  //  $this->load->model('user_model');
//    $result = $this->user_model->get_users();

   // $data['results'] = $this->user_model->get_users($user_id, 'sami');
   //
   //
   //  $this->load->view('user_view',$data);

       // foreach ($result as $object) {
       //   echo $object->username. "<br>";
       // }
//     }

//   public function insert() {
//
//     $username = "peter";
//     $password = "secret";
//
//     $this->user_model->create_users([
//       'username' => $username,
//       'password' => $password
//     ]);
//
// }
//
// public function update() {
//
//     $id = 3;
//   $username = "rupok";
//   $password = "happy birthday";
//
//   $this->user_model->update_users([
//     'username' => $username,
//     'password' => $password
//   ], $id );
//
// }
// public function delete() {
//
//       $id = 3;
//       $this->user_model->delete_users($id);
// }

}

 ?>
