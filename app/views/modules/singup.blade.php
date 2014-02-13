@extends('layouts.admin')

@section('main')

	{{Form::open(array('url'=>'singup')) }}
	{{Form::text('username')}}
	{{Form::text('ma_quyen')}}
	{{Form::password('password')}}
	{{Form::password('confirm_password')}}
	{{Form::submit('singup')}}
	{{Form::close()}}
 @stop