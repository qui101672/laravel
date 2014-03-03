@extends('layouts.scaffold')

@section('main')
<h1>Home page</h1>
<p>Current time: {{ date('F j, Y, g:i A') }}  </p>
@stop