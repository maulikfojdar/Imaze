var default_content="";

$(document).ready(function(){
						   
	$('ul li a').click(function (e){
		 	$('.selected').removeClass("selected");
			$(this).toggleClass("selected");
			checkURL(this.hash);

	});
	
	
	//filling in the default content
	default_content = $('#content').html();
	setInterval("checkURL()",100);
	
});

var lasturl="";

function checkURL(hash)
{
	if(!hash) hash=window.location.hash;
	
	if(hash != lasturl)
	{
		lasturl=hash;
		
		// FIX - if we've used the history buttons to return to the homepage,
		// fill the pageContent with the default_content
		
		if(hash=="")
		$('#content').html(default_content);
		
		else
		loadPage(hash);
		setButton(hash);
	}
}

function setButton(hash) {
	var class_name='.'+hash.replace('#','');
	$('.selected').removeClass("selected");
	$(class_name+' > a').toggleClass("selected");
}

function loadPage(url)
{
	url=url.replace('#','');
	
	$('#loader_container').css('visibility','visible');
	$.ajax({
		type: "POST",
		url: "include/load_page.php",
		data: 'page='+url,
		dataType: "html",
		success: function(msg){
			
			if(parseInt(msg)!=0)
			{
				$('#content').html(msg);
				$('#loader_container').css('visibility','hidden');
				
			}
		}
		
	});
}