@extends('layouts.scaffold')

@section('main')

<h1>Show Bai_viet</h1>

<p>{{ link_to_route('bai_viets.index', 'Return to all bai_viets') }}</p>

		{{{ $bai_viet->id_nguoi_tao_bai_viet }}}
		{{{$bai_viet->created_at}}}</br>
		{{{ $bai_viet->noi_dung_bai_viet }}}</br>
		{{{ $bai_viet->tag }}}

@stop
