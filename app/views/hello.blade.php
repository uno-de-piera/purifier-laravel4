<!DOCTYPE html>
<html>
<head>
	<title>Purifier en laravel 4</title>
	<meta charset="utf-8">
</head>
<body>
	 <div class="form">
		{{ Form::open(array('url' => 'purifier')) }}
		
			<div class="form-group">
				{{ Form::label('title', 'Título') }}
				{{ Form::text('title', Input::old('title'), array("class" => "form-control")) }}
			</div>

			<div class="form-group">
				{{ Form::label('body', 'Escribe tu post') }}
				{{ Form::textarea('body', Input::old('body'), array("class" => "form-control")) }}
			</div>

			{{ Form::submit('Crear post', array("class" => "btn btn-success")) }}

		{{ Form::close() }}
	</div>
</body>
</html>