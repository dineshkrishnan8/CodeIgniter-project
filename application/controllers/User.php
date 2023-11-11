<?php
class User extends CI_controller{

    function index(){
        $this->load->model('User_model');
        $users=$this->User_model->all();
        $data=array();
        $data['users']=$users;
        $this->load->library('encryption');
        $this->load->view('list',$data);
        
    }
    function sel()
    {
        
        $this->load->model('User_model');
        $fname=$this->session->userdata('fname');
        $users=$this->User_model->getdatabyname($fname);
        $data=array();
        $data['users']=$users;
        $this->load->library('encryption');
        $this->load->library('session');
        $this->load->view('sel',$data);
        
        

    }

    function create (){

        $this->load->model('User_model');
        $this->load->library('encryption');
        $this->form_validation->set_rules('fname','fname','required');
        $this->form_validation->set_rules('lname','lname','required');
        $this->form_validation->set_rules('mail','mail','required');
        $this->form_validation->set_rules('pass','pass','required');
        $this->form_validation->set_rules('dob','dob','required');

        if($this->form_validation->run() == false){
            $this->load->view('create');
        }else{
            //save user data base
            
            $formArray=array();
            $formArray['fname']=$this->input->post('fname');
            $formArray['lname']=$this->input->post('lname');
            $formArray['mail']=$this->input->post('mail');
            $din=$this->input->post('pass');

            $this->load->library('encryption');

            // $pass= $this->input->post('pass');
            // $pass=$this->encryption->encrypt($pass);
            // $formArray['pass']=$pass;
            $formArray['pass']=$this->encryption->encrypt($din);
        

            $formArray['dob']=$this->input->post('dob');
            $this->User_model->create($formArray);
            // $this->session->set_flashdata('success','Recored add successfull');
            echo"<script>alert('registration successful')
            window.location. href='login' </script>";
           
            

        }
    }
    function list(){
        $this->load->view('list');

    }
    function home(){
        $this->load->view('home');
    }
    function login(){
   
        $this->load->view('login');
             
    }
    function front()
    {
        $this->load->view('front');
    }
    // function log()
    // {
    //     $this->load->view('log');
    // }
    // function sig()
    // {
    //     $this->load->view('sig');
    // }
    // function login_process()
    // {
    //     $this->load->library('encryption');
    //     $formArray['fname']=$this->input->post('fname');

    //     $formArray['pass']=$this->input->post('pass');
        
       
    //     $this->load->library('session');
    //     $this->session->set_userdata('fname',$formArray['fname']);

    //     $this->load->model('User_model');
    //     $this->load->library('encryption');
    //     $status = $this->User_model->get($formArray);
        
        
    //     if($status==true)
    //     {
        
    //         echo "<script>alert('login sucessfull')</script>";

    //         $this->load->library('session');
    //         $formArray['fname']= $_SESSION['fname'];
    //         redirect(base_url().'index.php/user/sel');

    //     }
    //     else
    //     {
    //         echo "<script>alert('login  unsucess')</script>";
    //     }

    // }
//     function login_process()
// {
//     $this->load->library('encryption');
//     $fname=$this->input->post('fname');

//     $pass=$this->input->post('pass');
//     $this->load->library('session');
//     $this->session->set_userdata('fname',$formArray['fname']);
   

//     $this->load->model('User_model');
//     $this->load->library('encryption');
//     if($user=$this->user_model->get($fname))
//     {
//         if($user->pass==$pass)
//         {
//             echo "login sucessfully";
//             $this->session->set_userdata('id',$user->id);
//         }
//         else{
//             echo"login error";
//         }
  
//     }
//     else{
//         echo"no account";
//     }
//     $dinesh = $this->User_model->get($formArray);
//     if($dinesh==true)
//     {
    
//         echo "<script>alert('login sucessfull ')</script>";

//         $this->load->library('session');
//         $formArray['fname']= $_SESSION['fname'];
//         redirect(base_url().'index.php/user/sel');

//     }
//     else
//     {
//         echo "<scrip>alert('login  unsucess')</script>";
//     }

// }




function login_process()
{
    $fname=$this->input->post('fname');
    $pass=$this->input->post('pass');

    $this->load->database();
    $this->load->model('user_model');
    if($users=$this->user_model->getUser1($fname))
    {
        $this->load->library('encryption');
        if( $this->encryption->decrypt($users->pass)==$pass)
        {
        // echo"login success";
        $this->load->library('session');
        $this->session->set_userdata('fname',$users->fname);
        redirect(base_url().'index.php/user/sel');

         }
         else{
            echo"<script>alert('login error')
            window.location. href='login'</script>";
            
         }
    }
    else
    {
        echo"<script>alert('no account from the username')
        window.location. href='login' </script>";
    }
   
}




    function din()
    {
        $this->load->library('session');
        $this->load->view('din');
        
    }

    function edit($id){
        $this->load->model('User_model');
        $user=$this->User_model->getUser($id);
        $data=array();
        $data['user']=$user;

        $this->form_validation->set_rules('fname','fname','required');
        $this->form_validation->set_rules('lname','lname','required');
        $this->form_validation->set_rules('mail','mail','required');
        $this->form_validation->set_rules('pass','pass','required');
        $this->form_validation->set_rules('dob','dob','required');

        if ($this->form_validation->run() == false){
            $this->load->view('edit',$data);
        }else{
            //update user record
            $formArray=array();
            $formArray['fname']=$this->input->post('fname');
            $formArray['lname']=$this->input->post('lname');
            $formArray['mail']=$this->input->post('mail');

            // $this->load->library('encryption');
            // $pass= $this->input->post('pass');
            // $pass=$this->encryption->encrypt($pass);
            // $formArray['pass']=$pass;

            $formArray['dob']=$this->input->post('dob');
            $this->User_model->updateUser($id, $formArray);
            $this->session->set_flashdata('success','Recored updated successfull!');
            redirect(base_url().'index.php/user/index');
        }

    }

    function delete($id){
        $this->load->model('User_model');
        $user=$this->User_model->getUser($id);
        if(empty($user)){
            $this->session->set_flashdata('failure','Recored not found in database!');
            redirect(base_url().'index.php/user/index');
        }
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('success','Recored deleted successfull!');
        redirect(base_url().'index.php/user/index');
    }
}
?>