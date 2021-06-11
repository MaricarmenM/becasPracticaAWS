@extends('layouts.template')

@section('content')
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center"> Solicitudes <strong>Beca</strong>
            </h2>
            <hr>
            <div class="row text-left">
                <a href="{{route ('becasadmin.create')}}">
                    <img width="40px" height="40px" src=" {{ asset('img/add.png') }}" alt="">
                </a>
            </div>
            <br>
            <table class="table">
               <thead class="table-primary ">
                <tr>
                    <th>No Control</th>
                    <th>Nombre del solicitante</th>
                    <th>Genero</th>
                    <th>Semestre</th>
                    <th>Carrera</th>
                    <th>Fecha Nacimiento</th>
                    <th>Domicilio</th>
                    <th>Tipo de beca</th>
                    <th>Carta de motivos</th>
                    <th>Identificacion</th>
                    <th>Comprobante de Domicilio</th>
                </tr>
               </thead>
               <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                  <td>{{$alumno->noControl}}</td>
                  <td>{{$alumno->nombre}}</td>
                  <td>{{$alumno->genero}}</td>
                  <td>{{$alumno->semestre}}</td>
                  <td>{{$alumno->carrera}}</td>
                  <td>{{$alumno->fechaNacimiento}}</td>
                  <td>{{$alumno->domicilio}}</td>
                  <td>{{$alumno->tipoBeca}}</td>
                  <td style="align-content: center;">
                    <a href="{{Storage::disk('s3')->url('data/cartas/'.$alumno->cartaMotivos)}}">
                        <img width="35px" height="35px" src=" {{ asset('img/archivo.png') }}" alt="">
                    </a>
                  </td >
                  <td style="align-content: center;">
                    <a href="{{Storage::disk('s3')->url('data/ids/'.$alumno->identificacion)}}">
                        <img width="35px" height="35px" src=" {{ asset('img/archivo.png') }}" alt="">
                    </a>
                  </td>
                  <td style="align-content: center;">
                    <a href="{{Storage::disk('s3')->url('data/comprobantes/'.$alumno->comprobanteDom)}}">
                        <img width="35px" height="35px" src=" {{ asset('img/archivo.png') }}" alt="">
                    </a>
                  </td>

                </tr>
                @endforeach
               </tbody>
            </table>
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