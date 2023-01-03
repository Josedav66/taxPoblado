@extends('layouts.app')

@section('title','Crear')

@section('content')


<div class="container-plantilla-crear">
    <div class="plantilla-crear">

        <div class="title-plantilla">
            <h2>Diligenciar planilla.</h2>
        </div>


        <div class="formulario-plantilla">
            <form action="{{route('planillas.store')}}" method="post">

                @csrf

               <div class="container-cedula-form">
                   <label for="cedula">Cedula</label><br>
                   <input type="text" name="cedula">
                   <span class="text-danger">@error('cedula') {{$message}} @enderror </span>

               </div>

               <div class="container-placa-form">
                <label for="placa">Placa</label><br>
                <input type="text" name="placa">
                <span class="text-danger">@error('placa') {{$message}} @enderror </span>

               </div>

               <div class="container-cantidad-form">
                <label for="cantidad_planillas">Cantidad</label><br>
                <input type="text" name="cantidad_planillas">
                <span class="text-danger">@error('cantidad_planillas') {{$message}} @enderror </span>

               </div>

               <div class="container-botones-form d-flex">
                <div class="button-guardar">
                    <input class="btn btn-success" type="submit" value="Guardar datos">
                </div>
                
                
                <div class="regresar">
                    <a class="btn btn-primary" href="{{route ('planillas.index')}}">Regresar</a>

                </div>               
            </div>
   

            </form>
        </div>


    </div>
</div>
    




@endsection