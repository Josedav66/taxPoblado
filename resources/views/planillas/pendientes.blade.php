@extends('layouts.app')

@section('title','Pendientes')

@section('content')
     
<div class="pendientes">
    <table>
        <thead class="head-table cabecera">
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Placa</th>
            <th>N* planillas</th>

        </thead>

        <tbody class="body-table pendientes">
            @foreach($planillas as $planilla)
             <tr>
              
               <td></td>
               <td>{{$planilla->cedula}}</td>
               <td>{{$planilla->placa}}</td>
               <td>{{$planilla->cantidad_planillas}}</td>
               <td>
                @can('planillas.consultar')
                <a class="btn btn-secondary px-2" href="{{url('planillas/'.$planilla->placa.'/consultar')}}">Consultar</a>
                @endcan

               </td>

          
             </tr>
             @endforeach()

        </tbody>
    </table>
</div>




@endsection


