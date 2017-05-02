<?php
	echo "<h4> Группы пользователя ".$var->last_name." ".$var->first_name."</h4> </div>";
	echo '<div class="panel-body" style = "background-color: #FFF">'; 

	//print_r($var);
	
	foreach ($var->groups as $key => $val)
	{
		echo "Название: $val->name <br>";
		echo "Описание: $val->description <br>";
	}
				
	echo '</div>';
?>