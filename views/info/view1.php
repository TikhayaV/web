<?php

	echo "<h4>".$var->last_name." ".$var->first_name."</h4> </div>";
	echo '<div class="panel-body" style = "background-color: #FFF">'; 

	//print_r($var);
	
	if (isset($var->crop_photo))
		echo '<div class = "col-md-4"><img src ="'.$var->crop_photo->photo->src_xbig.'" class = "img-responsive"></div>';
	else
		echo '<div class = "col-md-4"><img src ="http://localhost/test/images/noimage.png" class = "img-responsive"></div>';
	
	echo "Фамилия: $var->last_name <br>";
	echo "Имя: $var->first_name <br>";
	echo "Дата рождения: $var->bdate <br>";
	echo "Город: ". $pt->get_object('database.getCitiesById',"city_ids=$var->city")->response[0]->name ."<br>";
	echo "Страна: ". $pt->get_object('database.getCountriesById',"country_ids=$var->country")->response[0]->name ."<br>";
	echo "Университет: $var->university_name <br>";
	echo "Институт: $var->faculty_name <br>";
	echo "Интересы: $var->interests <br>";
		
	$pt = new API_FUNCTIONS();
			
	echo '</div>';

	function get_info ($function_name,$element)
	{
		$pt = new API_FUNCTIONS();
		$f=$pt->get_object('database.getCitiesById',"city_ids=$element");
		return $f->response[0]->name;
	}
 ?>