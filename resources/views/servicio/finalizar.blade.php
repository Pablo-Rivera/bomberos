@extends('layouts.app')

@section('content')
<article class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Finalizar servicio
    </div>
  <div class="panel-body">

  {!! Form::open([ 'route' => ['servicio.update', $servicio], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}

    @php
    $superficie=$cuartel=$reconocimiento=$disposiciones=$jefe=$oficial=$jcuerpo=null;
    $ilesos=$lesionados=$quemados=$muertos=$otros=$combustible=0;
    $regreso=\Carbon\Carbon::now(new DateTimeZone('America/Argentina/Buenos_Aires'))->addSeconds(30)->toDateTimeString();
    @endphp
    @php
    $numero=$servicio->id;
    $tipo=$servicio->tipo_servicio_id;
    $llamada=$servicio->autor_llamada;
    $direccion=$servicio->direccion;
    $hora=$servicio->hora_alarma;
    $salida=$servicio->hora_salida;
    @endphp

    @if(!$servicio->hora_salida)
      @php
        $salida=\Carbon\Carbon::now(new DateTimeZone('America/Argentina/Buenos_Aires'))->toDateTimeString();
      @endphp
    @endif

    @include('servicio.formcompleto')
  {!! Form::close() !!}

    </div>
  </div>
</article>

@endsection
