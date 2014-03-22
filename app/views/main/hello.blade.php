@extends('layouts.default')
@section('content')

		<h1>
			
			<img src="http://localhost/Solomon_alpha/public/Assets/logo2.gif"/><br>
			Digital Human Resources</h1><br>

{{ Form::open(array('url' => '/worker', 'method' => 'GET')) }}
  Username:{{ Form::text('username') }}<br>
  Password: {{ Form::text('password') }}<br>
   {{ Form::submit ('Log In') }}

    {{ Form::close() }}
@stop