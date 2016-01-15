<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        $( "#submit" ).click(function() {
	  		alert( "Do you want to submit?" );
		});
    });
</script>
<style type="text/css">
	.form_wrapper{
		vertical-align: center;
		background-color: #00008B;
		width: 500px;
		min-height: 288px;
		color: #ffffff;
		text-align: center;
		padding-top: 80px;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>SMS</title>
</head>
<body>
	
	<div class="form_wrapper">
		<form action="customer/send" method="POST">
			<input type="hidden" name="_method" value="POST">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<p>Name:<input type="text" name="customer"><p>
			<p>Phone Number <input type="text" name="phone_number"><p>
			<input type="submit" name="submit" value="submit" id="submit">
		</form>
	</div>
<!-- 	{!! Form::open(array('action'=>'customer/send','method' => 'post')) !!}

	{!! Form::text('customer') !!}
	{!! Form::text('phone_number') !!}
	{!! Form::text('message') !!}
	{!! Form::submit() !!}
{!! Form::close() !!}
 -->

</body>
</html>


