<?php

class Page extends Controller {
	
	function index()
	{
			$db=$this->database();
	
		if(null !==$action){
			
		}
		if(null !==$_POST['userid']){
			$user=$_POST['userid'];
			$pass=$_POST['userpass'];
			 $query = "select * from p_users where pu_name ='$user' and pu_password='$pass'";
 $count=$db->num_rows($query);
 if($count==1){
	 $rslt=$db->get_results($query);
	 $_SESSION['login_token']=1;
	 $_SESSION['login_data']=$rslt[0];
 }
		}
		if(null !==$_SESSION['login_token'] && $_SESSION['login_token']===1 ){
		$vas['ses_data']=$_SESSION['login_data'];
		$this->admin_View('dashboard',$vas);
			
		}else{
			
		$this->admin_View('login');	
		}
			
	
	}
	function logout(){
		
	 unset( $_SESSION['login_token']);
	 unset( $_SESSION['login_data']);
	 session_destroy;
	 $this->redirect('main','admin');
		echo "i am logout";
	}
    
}

?>
