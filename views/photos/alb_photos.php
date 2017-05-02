<?php
	//print_r ($var);
	
	echo '<div class="panel-body" style = "background-color: #EEE">'; 
	for ($i=0; $i<Count($var) ;$i++)
	{
		echo '<div class = "col-md-4"><img src ='.$var[$i]->src_big.' class = "img-responsive"></div>';	
	}

	echo

	'<a href="#myModal" class="btn btn-primary" data-toggle="modal">Открыть модальное окно</a>  

	<!-- HTML-код модального окна -->
	<div id="myModal" class="modal">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title" style = "color: black">Заголовок модального окна</h4>
		  </div>
		  <!-- Основное содержимое модального окна -->
		  <div class="modal-body" style = "color: black">
			<input type="file" class = "btn btn-danger"></input>    
		  </div>
		  <!-- Футер модального окна -->
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			<button type="button" class="btn btn-primary" onClick="addPhotos('.$_GET['album'].')">Добавить</button>
		  </div>
		</div>
	  </div>
	</div>';

	echo '</div>';


	function Upload_server ()
	{
				
	}

	function WallPhoto ()
	{
			
	}
?>