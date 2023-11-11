<?php
class User_model extends CI_model {
    function create($formArray){
        $this->db->insert('cod',$formArray); //insert into users (name,lname) values (?,?);
    }

    function all(){
        return $user=$this->db->get('cod')->result_array(); //select *from users
    }

    function getUser($id){
        $this->db->where('id',$id);
        return $user=$this->db->get('cod')->row_array();//select * from users where id=?
    }

    function updateUser($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('cod',$formArray); //update users set name=''    
    }

    
    function deleteUser($id){
        $this->db->where('id',$id);// delete from users where id=?
        $this->db->delete('cod');
    }
    // function get($formArray)
    // {
    //   $result = $this->db->select('*')->where('fname',$formArray['fname'])->where($this->encryption->decrypt('pass'),$formArray['pass'])->get('cod')->row();
    // //   $this->db->where('fname',$formArray);
      
    //   if(!empty($result))
    //   {
    //     return true;
    //     // return true;
    //   }
    //   else
    //   {
    //     return false;
    //   }
    // }
    // function find($fname)
    // {
    
    //   $this->db->where('fname',$fname);
    //     return $user=$this->db->get('cod')->row_array();

    // }
   
   public function getUser1($fname)
   {
    return $this->db->where('fname',$fname)->get('cod')->row();

   }


    function getdatabyname($fname){
        $this->db->where('fname',$fname);
        return $users=$this->db->get('cod')->result_array(); //select * from users where id=?
    }
}
?>