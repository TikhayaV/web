<?php
	echo "<h4> ������ ������������ ".$var->last_name." ".$var->first_name."</h4> </div>";
	echo '<div class="panel-body" style = "background-color: #FFF">'; 

	//print_r($var);
	
	foreach ($var->groups as $key => $val)
	{
		echo "��������: $val->name <br>";
		echo "��������: $val->description <br>";
	}
				
	echo '</div>';
?>