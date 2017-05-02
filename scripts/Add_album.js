function addAlbum (e)
{
	$.ajax({
		
		url: 'https://localhost/test/albums/control',
		type: 'POST',
		data: "&function=photos.createAlbum&params="+document.getElementsByName('albumName')[0].value, 
	
	}).done(function(data)
	{
		$("#Alb").append(data);
		alert(data);
	});	
}

 function addPhotos(e, arg)
{
	alert(arg);
	$.ajax({

	url: 'https://localhost/test/photos/add',
	type: 'POST',
	data: "&al_id="+String.valueOf(arg), 
	
	}).done(function(data)
	{
		$("#Pht").append(data);
		alert(data);
	});		
} 