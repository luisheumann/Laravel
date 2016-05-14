@extends('layouts.frontend')

@section('title', 'Esta pagina es la de transporte')
@section('content')

@section('sidebar')
    @parent

    <p>Menu - inicio - configuracion - etc</p>
@stop





<b>TIPO:</b> {{$Transports->tipotrasporte->tipo}}
<br>
<b>MARCA:</b> {{$Transports->marca->marcatipo->tipo}}
<br>
<b>MODELO:</b> {{$Transports->marca->modelotipo->tipo}}


 @stop
