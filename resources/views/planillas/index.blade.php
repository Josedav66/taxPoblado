@extends('layouts.app')

@section('title','Planillas')

@section('content')
    
     
<div class="container-index-planilla">
    <div class="planilla">

    @if(Session::has('mensaje'))
    <div class="alert alert-success " role="alert">
    
      {{ Session::get('mensaje')}}
     
        
    </div>
    @endif

    <div class="buscador-planilla">

      <form method="get" action="{{route('planillas.index')}}" class="d-flex" role="search">
        <input class="form-control me-2" type="search"  name="texto" value="{{ $texto }}"  placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>


    @can('planillas.index')
        <div class="button-crear">
            <a class="btn btn-success" href="{{route('planillas.create')}}">Crear planilla</a>
        </div>

        <div class="table-planillas">
    @endcan

            
  <table class="table-planilla ">
    <thead class="thead-dark">
        
          <th style="display: none">#</th>
          <th class="cedula">Cedula</th>
          <th >Placa</th>
          <th class="cantidad" >Cantidad</th>
          <th class="fecha">Fecha</th>
          <th>Acciones</th>
        
      </thead>
      <tbody>

        @if(count($planillas) <= 0)
            <tr>
              <td class="sin-resultados">No hay resultados.</td>
            </tr>
          @else



          @foreach($planillas as $planilla)

          <tr>

              <td style="display: none">{{$planilla->id}}</td>
              <td>{{$planilla->cedula}}</td>
              <td>{{$planilla->placa}}</td>
              <td>{{$planilla->cantidad_planillas}}</td>
              <td>{{$planilla->created_at}}</td>
              
              
              <td class="d-flex" style="width:260px">
                @can('planillas.edit')
                <a class="btn btn-primary px-2" href="{{url('/planillas/'.$planilla->id.'/edit')}}">Editar </a> 
                 @endcan
                
                 @can('planillas.delete')
                <form class="px-2" action="{{ url('/planillas/'.$planilla->id ) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" onclick=" return confirm('¿De verdad quieres borrar?') " type="submit" value="Borrar">
                  
                  </form>
                  @endcan

                @can('planillas.consultar')
                 <a class="btn btn-secondary px-2" href="{{url('planillas/'.$planilla->placa.'/consultar')}}">Consultar</a>
                 @endcan

                 @can('planillas.restar')
                 <form class="px-2" action="{{url('planillas/'.$planilla->id)}}" method="post">
                  
                  @csrf

                  <input class="boton-usar btn btn-warning" onclick=" return confirm('¿De verdad usaras una planilla?') " type="submit" value="Restar">

                 </form>
                 @endcan

          </tr>
          <span class="text-danger">@error('cantidad_planillas') {{$message}} @enderror </span>

          @endforeach
          @endif

          
      </tbody>
  </table>
              
              
  {!! $planillas->links() !!}
        </div>




        

    </div>

    

    
</div>

<div class="pendientes">
  <a class="btn btn-danger" href="{{route('planillas.pendientes')}}"> Consultar Pendientes</a>
</div>






@endsection


