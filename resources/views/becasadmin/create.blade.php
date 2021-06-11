@extends('layouts.template')

@section('content')

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Nuevo <strong>Registro</strong>
            </h2>
            <hr>
            {!! Form::open(['url' => 'becasadmin','method'=>'post', 'files'=> true]) !!}

                <div class="form-group">
                     {{ Form::label('noControl', 'Numero de control' )}}
                     {{Form::text('noControl',null,['class'=>'form-control', 'placeholder'=>'No. Control'])}}
                </div><br>

                <div class="form-group">
                      {{ Form::label('nombre', 'Nombre Completo' )}}
                     {{Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre Completo'])}}
                </div><br>

                <div class="form-group">
                  {{ Form::label('genero', 'Genero' )}}
                  {{Form::select('genero',['masculino' => 'Masculino', 'femenino' => 'Femenino'],null,['class'=>'form-control', 'placeholder'=>' '])}}
                </div><br>

                <div class="form-group">
                  {{ Form::label('semestre', 'Semestre' )}}
                  {{Form::select('semestre',['5' => '5','6' => '6','7' => '7','8' => '8', '9' => '9'],null,['class'=>'form-control', 'placeholder'=>' '])}}
                </div><br>

                <div class="form-group">
                  {{ Form::label('carrera', 'Carrera' )}}
                 {{Form::text('carrera',null,['class'=>'form-control', 'placeholder'=>'Carrera'])}}
                </div><br>

                <div class="form-group">
                  {{ Form::label('fechaNacimiento', 'Fecha de nacimiento' )}}
                  {{Form::date('fechaNacimiento', \Carbon\Carbon::now())}}
                </div><br>

                <div class="form-group">
                 {{Form::label('domicilio', 'Domicilio' )}}
                 {{Form::text('domicilio',null,['class'=>'form-control', 'placeholder'=>'Domicilio'])}}
                </div><br>

                <div class="form-group">
                  {{Form::label('tipoBeca', 'Tipo de Beca' )}}
                 {{Form::select('tipoBeca',['economica' => 'economica', 'alimenticia' => 'alimenticia'],null,['class'=>'form-control', 'placeholder'=>' '])}}
                </div><br>
               
                
                <div class="form-group">
                      {{ Form::label('cartaMotivos', 'Carta de Motivos' )}}
                      @csrf
                      {{Form::file('cartaMotivos',null,['class'=>'form-control', 'placeholder'=>'Carta de Motivos'])}}
                </div><br>

                <div class="form-group">
                  {{Form::label('identificacion', 'Identificacion' )}}
                  @csrf
                  {{Form::file('identificacion',null,['class'=>'form-control mx-4', 'placeholder'=>'Identificacion'])}}
                </div><br>

                <div class="form-group">
                  {{Form::label('comprobanteDom', 'Comprobante de Domicilio' )}}
                  @csrf
                  {{Form::file('comprobanteDom',null,['class'=>'form-control', 'placeholder'=>'Comprobante de Domicilio'])}}
                </div><br>

                <div class="form-group">
                      {{ Form::submit('Create',['class'=>'form-control btn btn-primary'])}}
                </div>

            {!! Form::close() !!}
                      
        </div>
    </div>
</div>

<footer>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p>Copyright &copy; Company 2021</p>
        </div>
    </div>
</div>
</footer>
        
@endsection