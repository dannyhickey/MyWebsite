<?php
// CSS file:
?>

<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<!--jQuery CSS-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	
	<!--FontAwesome-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
<style>
		html,body
		{
			height: 100%;
			/* Both the html and body elements can't have padding or margin*/	
		}
		
	/* the wrapper id is pushing down the footer*/
		#wrap
		{
			min-height: 100%;
			height: auto;
			/* Negative indent footer by its height */
			margin: 0 auto -60px;
			/* Padding the bottom by the footers height */
			padding: 0 0 60px;
		}
		
		/* Set fixed height of footer */
		#footer 
		{
			height: 60px;
			background-color: #f5f5f5;
		}
		
		#laptop_img
		{
			float: right;
			width: 320px;
			height: 240px;
			margin-left: 10px;			
		}
		
		#btn_debug
		{
			/*position: absolute;
			
		//move button to the right 
		  //and take it back 5 pixels
			right: 5px;  */
		}
		
		#console_debug 
		{
			position: absolute;
			top: 50px;
			left: 0px;
			width: 60%;
			height: 700px;
			/* I'm setting the y axis of the pre 
			 * tag to scroll whenever there is overflow*/
			overflow-y: scroll; 
			background-color: #FFFFFF; 
			box-shadow: 2px 2px 5px #CCCCCC;
		}
		
		#console_debug pre
		{			
		}
	</style>
