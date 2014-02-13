var default_content="";
$(document).ready(function() {
						  
						  $("#loading_wrapper").css('visibility','hidden');
						  $("#dock2 a").click(function (e){
		 							checkURL(this.hash);
									
														});
						 default_content = $('#main_panel_content').html();
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
				$('#main_panel_content').html(default_content);
		
		else
			
			resolveBranch(hash);
	}
}

function resolveBranch(url)
{
	url=url.replace('#','');
	$("#loading_wrapper").css('visibility','visible');
	
	 var jqxhr=$.get("include/resolveBranch.php", { branch: url },
   function(data){
	 $("#event_menu_content").css('visibility','hidden');  
	 $("#loading_wrapper").delay(200).css('visibility','hidden');
     $('#main_panel_content').html(data);
	 $("#event_menu_content").tabs( { 
						   selected : -1,
						   spinner: '',
                		   select: function(event, ui) { 
                    		$("#event_menu_content li a .loader").remove();
                    		$("#loading_wrapper").css('visibility','visible');
                    },
                load: function(event, ui) { $("#loading_wrapper").css('visibility','hidden'); }
						   }
						   );
	 $("#event_menu_content a").click( function () { $("#branch_details").css('visibility','hidden'); });
	 $("#dock2 a").click(function (e){
		 							$("#event_menu_content #event_details").css('visibility','hidden');
									$("#branch_details").css('visibility','visible');
									});

    });
}




 