	 $(document).ready(function(){     
		$("#login_form").submit(function(){
			$(".errors").hide();
			var error=0;
			$(".linputs").each(function(inp){
				if($(this).val()=="") 
					{														
					$("#"+$(this).attr("id")+"_error").show(); 
					error=1; 
					}
				})	
			if(error==0)
				{
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test( $("#uname").val())) { error=1; $("#uname_error").show(); } 
				}
			if(error==0) { return true; } else { return false; }
			 })
		
		var subs=0;
		$("#registrations").submit(function(){ 			
			if(subs==1) return true;
			$(".errors").hide();
			var error=0;
			$("#registrations .inputs").each(function(inp){
				if($(this).val()=="") 
					{	
					$("#"+$(this).attr("id")+"_error").css("display","inline-block"); 
					error=1; 
					}
				})	
				if($("#country").val()=="Select Country")
					{
					$("#country_error").show(); 
					}
			if(error!=0) return false;			
			if(error==0)
				{
					if($("#ebiz_name").val().length<6) { error=1; $("#ebiz_name_error_min").show(); } 
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
					if(!emailReg.test( $("#alt_email").val())) { error=1; $("#alt_email_error_invalid").show();  } 
					if($("#alt_password").val().length<6) { error=1; $("#alt_password_error_min").show();  } 
					if($("#alt_password").val()!=$("#alt_retypepassword").val()){ error=1; $("#alt_password_error_miss").show(); } 
					}
			if(error!=0) return false;	
			if(error==0)
				{
					if($("#domsearch").val()=="email.biz") { subs=1; $("#registrations").submit(); }
					$.ajax({						
						url:"checkdomain.php?domsearch="+$("#domsearch").val(),
						context: document.body
						}).done(function(data){			
							if(data="true") {	
								subs=1;
								$("#registrations").submit();
							} else {
								$("#domsearch_error_un").show();								
								}
							})
					}
			return false;			
			})
 		$(".ui-autocomplete li").live("click",function(){
			$("small").hide();
			})
 		$(".tab").click(function(){
			$(".errors").hide();
			$(".eror").hide();
			$(".tab").removeClass("active");
			$(this).addClass("active");
			if($(this).html()=="Free Email")
				{
					$("#phn").hide();
					$("#phone").val('00000');
					$("#swap").html(ftxts);	
					}else
					{	
						$("#phn").show();	
						$("#phone").val('');
						$("#swap").html(ptxts);
					}
			$('#domsearch').autocomplete({source:'search/domain_search.php', minLength:1});							
			$(".inputs , .linputs").each(function(inp){
				if($(this).val()=="") 
					{														
					$("#"+$(this).attr("id")+"_label").show(); 
					error=1; 
					}
				})				
			$("#registrations input").blur(function(){			
				if($.trim($(this).val())=="") $("#"+$(this).attr("id")+"_label").show();
				})
				})
	$('#domsearch').autocomplete({source:'search/domain_search.php', minLength:1});
$(document).ready(function(){
    $("#button_make").click(function(){
		if($("#fomraccess").css("display")=="block"){
			$("#fomraccess").slideUp(1000);
			$("#makeanyemail").slideDown(1000);
			}
		})
		
		    $("#accessany").click(function(){
			$("#fomraccess").slideDown(1000);
			$("#makeanyemail").slideUp(1000);
					
			})

	});
	





	$("#navtop").click(function(){
			if($("#nav").css("display")=="none")	{
				$("#nav").fadeIn(200).animate({marginLeft:0});
				$("#wholebody").fadeIn(200);
				}
				else{
//					$("#nav").animate({marginLeft:-120}).fadeOut(200);
//					$("#wholebody").fadeOut(200);
					
					}
		});
		$("#wholebody").click(function(){
					$("#nav").animate({marginLeft:-120}).fadeOut(200);
					$("#wholebody").fadeOut(200);
			})



 })
        
        