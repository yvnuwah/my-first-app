{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
	<h2 class="form-signin-heading">Please Login</h2>

	<div class="form-group">
		{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
	</div>

	<div class="form-group">
		{{ Form::text('password', null, array('class'=>'form-control', 'placeholder'=>'Password')) }}
	</div>

	{{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block')) }}
{{ Form::close() }}