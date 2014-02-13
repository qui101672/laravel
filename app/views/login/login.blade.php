@extends('layouts.scaffold')

@section('main')
	{{Form::open(array('url'=>'login'))}}
	{{Form::text('username')}}
	{{Form::password('password')}}
	{{Form::submit('Login')}}
	{{Form::close()}}
@stop