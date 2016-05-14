@extends('layouts.frontend')

@section('title', 'Esta pagina es la de transporte')
@section('content')

@section('sidebar')
    @parent




@stop



@foreach ($Modelos as $Modelo)
    <p>{{ $Modelo->tipo }}</p>
@endforeach

 @stop
