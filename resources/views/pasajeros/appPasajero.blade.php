@extends('layouts.app')

@section('title','App Pasajero')

@section('content')



    <!--Contenido app Pasajero-->


    <div class="contenido-app">
        <div class="row-app">
            <div class="top-part">
               <h2>App Pasajero</h2>
               <p>Ahora pedir tu taxi es mucho más rápido y confiable con tan solo haciendo una descarga en el link de <span>Google Play</span>.
                  Pide tu taxi desde tu móvil y espera por el conductor más cercano. 
               </p>
            </div>
            <div class="bottom-part">
                <a href="https://play.google.com/store/apps/details?id=com.taxpoblado.envigado&hl=en_NZ&gl=US">
                    <img src="data:image/png;base64,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" alt="">
                </a>
            </div>

        </div>


    </div>




 

    <!--End contenido Pasajero-->


  @endsection



