@extends('layouts.app')

@section('title','Consultar')

@section('content')


<div class="container-consulta">
    <div class="consulta">

        <div class="title">
            <h3> <i class="fa-solid fa-cube px-2"></i>Consultar.</h3>
        </div>



        <div class="container-cards">

            <div class="card-placa">
                

                    <div class="contenido-placa">
                        <h1>Placa :</h1>
                        
                        <p><i class="fa-solid fa-table-list px-2" ></i><span>{{$planilla}}</span></p>
                        
                    </div>

                
            </div>

            <div class="card-cantidad-total">

                    <div class="contenido-cantidad-total">
                        <h1>Cantidad total :</h1>
                        <p><i class="fa-solid fa-square-pen px-2"></i><span>{{$consultar}}</span></p>
                    </div>
            </div>

            <div class="botones-consultar">




                
            </div>
            
            
        </div>
        <div class="volver-planilla">
            <a class="btn btn-primary" href="{{route('planillas.index')}}">Volver</a>
        </div>
        



    </div>
</div>







@endsection