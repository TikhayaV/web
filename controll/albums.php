﻿<?php
	include('C:\xampp\htdocs\test\classes\api_functions.php');
	include('C:\xampp\htdocs\test\classes\Authorization.php');

	Class Controller_Albums Extends Controller_Base 
	{
		// шаблон
		public $layouts = "first_layouts";
		
		
		function index() 
		{
			session_start();
			
			$tt = new API_FUNCTIONS();

			$this->template->vars('var',$tt->get_object("photos.getAlbums","owner_id=".$_SESSION['token']->user_id."&access_token=".$_SESSION['token']->token)->response);		
			$this->template->view('index');		
		}
		
		function control ()
		{
			$this->layouts = "first_layouts";
			session_start();
				
			$func = new API_FUNCTIONS();	
			$result = $func->get_object ($_POST["function"], "&title=".$_POST['params']."&access_token=".$_SESSION['token']->get_token_true()) ->response;

			echo '<div class="panel panel-default col-md-4" style = "color: black"> <div class="panel-body">';	  
			echo '<h4 align = "left">Название : '.$result->title.'</h4>';
			echo '<h4 align = "left">Размер : '.$result->size.'</h4>';	  
			echo '</div> </div>';		
		}
		
	}
?>