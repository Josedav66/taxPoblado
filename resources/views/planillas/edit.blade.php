@extends('layouts.app')

@section('title','Editar Planilla')

@section('content')


<div class="container-plantilla-crear">
    <div class="plantilla-crear">

        <div class="title-plantilla">
            <h2>Editar planilla.</h2>
        </div>


        <div class="formulario-plantilla">
            <form action="{{ route('planillas.update', $planillas->id) }}" method="post">

                @if(Session::has('mensaje'))

                   <div class="alert alert-success " role="alert">
                   {{ Session::get('mensaje')}}
                   </div>
                   
                @endif

                @csrf
                {{method_field('PATCH')}}

               <div class="container-cedula-form">
                   <label for="cedula">Cedula</label><br>
                   <input type="text" value="{{ isset($planillas->cedula)?$planillas->cedula:old('cedula')}}" name="cedula">
                   <span class="text-danger">@error('cedula') {{$message}} @enderror </span>

               </div>

               <div class="container-placa-form">
                <label for="placa">Placa</label><br>
                <input type="text" value="{{ isset($planillas->placa)?$planillas->placa:old('placa')}}" name="placa">
                <span class="text-danger">@error('placa') {{$message}} @enderror </span>

               </div>

               <div class="container-cantidad-form">
                <label for="cantidad_planillas">Cantidad</label><br>
                <input type="text" value="{{ isset($planillas->cantidad_planillas)?$planillas->cantidad_planillas:old('cantidad_planillas')}}" name="cantidad_planillas">
                <span class="text-danger">@error('cantidad_planillas') {{$message}} @enderror </span>

               </div>

               <div style="display: none" class="container-cantidad-form">
                <label for="created_at">Cantidad</label><br>
                <input type="text" name="created_at">
                <span class="text-danger">@error('created_at') {{$message}} @enderror </span>

               </div>

               <div class="container-botones-form d-flex">
                <div class="button-guardar">
                    <input class="btn btn-success" type="submit" value="Editar">
                </div>
                
                <div class="link-volver">
                    <a class=" btn btn-primary" href="{{Route('planillas.index')}}">Volver</a>
                 </div>


               </div>
   

            </form>
        </div>


    </div>
</div>
    




@endsection