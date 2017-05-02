<?php
	// контролер
	Class Controller_Index Extends Controller_Base 
	{
		
		// шаблон
		public $layouts = "general_layouts";
		
		// главный экшен
		// если в url нет явно указанного экшена, то по дефолту вызывается index
		function index() 
		{
			$this->template->view('index');
		}	
	}
?>