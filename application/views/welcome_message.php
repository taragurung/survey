<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

 <link href="<?php echo  base_url('css/bootstrap.css'); ?>">
 <script src="<?php echo base_url('js/script.js'); ?>"></script>
 <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>


	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
<div class="surveycontainer">
Type Question Here:<input type='text' name='question'>
Answer type:<select name="answertype" id="selectarea" class="form-control">
				<option value="1">single choice</option>
				<option value="2">Text-box</option>
				<option value="3">Multi choice</option>
			</select>

</div>
<div class="answerfield">
	<div class="singlechoice">
		<input type="radio" name="singlechoice[]"><input type="text" value='Option1'>
		<input type="radio" name="singlechoice[]"><input type="text" value='Option2'>
		<input type="radio" name="singlechoice[]"><input type="text" value='Option3'>
		<a href="#" id="addmore">Addmore</a>
	</div>

	<div class="multichoice">
		<input type="checkbox" name="multichoice[]"><input type="text" value='Option1'>
		<input type="checkbox" name="multichoice[]"><input type="text" value='Option2'>
		<input type="checkbox" name="multichoice[]"><input type="text" value='Option3'>
		<a href="#" id="addmore">Addmore</a>
	</div>

</div>

<div class="first">
	<input type="button" value="ADD Question" id="addQ" class="btn btn-success">
</div>
<div class="second">
	<input type="button" value="save" class="btn btn-success">
	<input type="button" value="Cancel" class="btn btn-warning">
</div>

<script>
jQuery(document).ready(function($) {
	$(".second").hide();
	$('.singlechoice').hide();
	$('.multichoice').hide();
});
$("#addQ").click(function(){
	//$(".surveycontainer").append("Type Question Here:<input type='text' name='question'>");
	$(".first").hide();
	$(".second").show();
});

//need to use switch instead for better
//script to show the input fields based on what is selected
$("#selectarea").change(function(){
if($(this).val()=="1"){
	$(".singlechoice").show();
	$(".multichoice").hide();
}

if($(this).val()=="2"){
	$(".singlechoice").hide();
	$(".multichoice").show();
}

});

//script for addmore fields
$("#addmore").click(function(e){
$(this).before("<input type='checkbox' name='multichoice[]'><input type='text' value='Optionmore'>");
e.preventDefault();
});
</script>
</body>
</html>