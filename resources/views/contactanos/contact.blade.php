@extends('layouts.app')

@section('title','Contactanos')



@section('content')

<div class="contenido-content" style="transform: translateY(-60px)">
<div class="container-contact" >
    <h1 class="logo">Con<span>ta</span>cta<span>nos</span></h1>

    <div class="contact-wrapper">
        <div class="contact-form">
            <h3>Sugerencia PQRS</h3>
            <form action="{{route('contactanos.store')}}" method="post">
                @csrf
                <p>
                    <label for="">Nombre completo</label>
                    <input type="text" name="name">
                </p>
                @error('name')
                <p><strong>{{$message}}</strong></p>
                    
                @enderror

                <p>
                    <label for="">Correo electronico</label>
                    <input type="text" name="email">
                </p>

                @error('email')
                <p><strong>{{$message}}</strong></p>
                    
                @enderror

                <p>
                    <label for="">Celular</label>
                    <input type="number" name="celphone">
                </p>

                @error('celphone')
                <p><strong>{{$message}}</strong></p>
                    
                @enderror

                <p>
                    <label for="">Cedula</label>
                    <input type="number" name="cedula"><br>

                    @error('cedula')
                <p><strong>{{$message}}</strong></p>
                    
                @enderror
                </p>

                

                <p class="block">
                    <label for="">Sugerencia</label>
                    <textarea name="sugerencia" rows="3"></textarea>
                </p>
                @error('sugerencia')
                <p><strong>{{$message}}</strong></p>
                    
                @enderror


                <div class="checkbox">
                    <p >
                        <label for="">Acepta los términos</label><br>
                        <input class="checkboxButton" value="Acepto términos" type="checkbox" name="checkbox"><br>
                        <a href="{{url('externos/consentimientoWeb')}}">Clic para más información </a>
                    </p>
                    @error('checkbox')
                    <p><strong>{{$message}}</strong></p>
                        
                    @enderror
                </div>




            


                <p class="block">
                    <button type="submit">
                        Enviar
                    </button>
                </p>

               


               
                 


                @if (session('info'))
                <script>
                   alert("{{session('info')}}");
                   
                </script>
                @endif

            </form>

        </div>
        <div class="contact-info">
            <h4>Más información</h4>
            <ul>
                <li><i class="fas fa-map-marker-alt px-2"></i>Cra. 43, Envigado, Antioquia</li>
                <li><i class="fas fa-phone px-2"></i>335 35 35</li>
                <li><i class="fas fa-envelope-opne-text px-2"></i>taxpoblado@gmail.com.co</li>
            </ul>
            <p>Tus comentarios son de mucha ayuda para nuestro desarrollo, escribe una petición, queja, reclamo o sugerencia que desees realizar.</p>
            <p>taxPoblado.com</p>

            <div class="logo">
                <img src="{{asset('img/logo fondo amarillo.jpg')}}" alt="">
            </div>
        </div>
    </div>



    <link>


</div>
</div>


@endsection