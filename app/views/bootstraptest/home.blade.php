<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Template that uses Bootstrap </title>

	<!-- Referencing Bootstrap CSS that is hosted locally -->
	{{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>

	<div class="container">
		<div class="row">
			<h2>This template is using locally hosted Bootstrap!</h2>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

	<!-- Referencing Bootstrap JS that is hosted locally -->
	{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>