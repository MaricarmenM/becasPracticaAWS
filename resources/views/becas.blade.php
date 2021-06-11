@extends('layouts.template')

@section('content')

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Blog Administration <strong>blog</strong>
            </h2>
            <hr>
            <div class="row text-center">
              
            </div>
            <br>
            <table class="table table-bordered">
               <thead>
                <tr>
                    <th>No Control</th>
                    <th>Nombre</th>
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
                     <td>{{$alumno->cartaMotivos}}</td>
                     <td>{{$alumno->identificacion}}</td>
                     <td>{{$alumno->comprobanteDom}}</td>
                     <td>
                         <a class="btn btn-primary" href="">Edit</a>
                         <a class="btn btn-danger" href="">Delete</a>
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
            <p>Copyright &copy; Company 2013</p>
        </div>
    </div>
</div>
</footer>
        
@endsection