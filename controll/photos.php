<?php

	include('C:\xampp\htdocs\test\classes\api_functions.php');
	include('C:\xampp\htdocs\test\classes\Authorization.php');

	Class Controller_Photos Extends Controller_Base 
	{
		// шаблон
		public $layouts = "first_layouts";
		
		function index() 
		{
			session_start();
			
			$tt = new API_FUNCTIONS();
			$this->template->vars('var',$tt->get_object("photos.getAll","owner_id=".$_SESSION['token']->user_id."&access_token=".$_SESSION['token']->token)->response);					
			$this->template->view('index');
		}
		
		function photos_alb ()
		{
			session_start();
			$tt = new API_FUNCTIONS();
					
			$this->template->vars('var',$tt->get_object("photos.get", "owner_id=".$_SESSION['token']->user_id."&album_id=".$_GET["album"]."&access_token=".$_SESSION['token']->token)->response);
			$this->template->view('alb_photos');
		}
		
		function add ()
		{
			session_start();
			$tt = new API_FUNCTIONS();
			echo $_POST['al_id'];
			$result = $tt->get_object("photos.getUploadServer","album_id=".$_POST['al_id']."&access_token=".$_SESSION['token']->token);
			print_r($result);
		}
	}
?>