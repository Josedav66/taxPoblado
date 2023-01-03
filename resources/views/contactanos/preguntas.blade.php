@extends('layouts.app')

@section('content')

@section('title','Preguntas')

<!--Contenido preguntas-->


<main>
    <h1>Preguntas frecuentes</h1>
        <div class="categorias " id="categorias">
  
          <div class="categoria activa" data-categoria="metodos-pago">
            <img src="{{asset('img/icon-metodo-pago.png')}}" alt="metodo-pago">
            <p>Metodos de pago</p>
          </div>
  
          <div class="categoria" data-categoria="conductor">
            <img src="{{asset('img/icon-car.png')}}" alt="conductor">
            <p>Conductor</p>
          </div>
  
          
  
          <div class="categoria" data-categoria="pasajero">
            <img src="{{asset('img/icon-user.png')}}" alt="">
            <p>Pasajero</p>
          </div>
  
          <div class="categoria" data-categoria="seguridad">
            <img src="{{asset('img/icon-seguridad.png')}}" alt="seguridad">
            <p>Seguridad</p>
          </div>
  
        </div>
  
        <div class="preguntas">
  
        <!--Metodos de pago-->
          <div class="container-preguntas activo" data-categoria="metodos-pago">
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Que metodos de pago tienen? <img src="{{asset('img/icon-cruz.png')}}"  alt=""> </p>
              <p class="respuesta"> Proximamente desde nuestra pagina web podras pagar desde la comodidad de tu casa.</p>
            </div>
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Cuales son los metodos de pago? <img src="{{asset('img/icon-cruz.png')}}" alt=""> </p>
              <p class="respuesta"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem deleniti commodi at atque minus inventore in dicta quo? Illum, inventore!</p>
            </div>
  
          </div>
  
          <!--Conductor-->
          <div class="container-preguntas" data-categoria="conductor">
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Que requisitos debo tener para afiliarme? <img src="{{asset('img/icon-cruz.png')}}"  alt=""> </p>
              <p class="respuesta"> 
              
          
                   <i class="fa-solid fa-check px-2"></i>Hoja de vida.<br>
                   <i class="fa-solid fa-check px-2"></i>2 copias de cédula al 150%.<br>
                   <i class="fa-solid fa-check px-2"></i>2 copias licencia conducción al 150%.<br>
                   <i class="fa-solid fa-check px-2"></i>Certificado de Eps o Adres.<br>
                   <i class="fa-solid fa-check px-2"></i>Certificado de pensión o resolución de pensión <span>en caso de ser pensionado.</span><br>
                   <i class="fa-solid fa-check px-2"></i>Certificado de procuraduria.<br>
                   <i class="fa-solid fa-check px-2"></i>Certificado del runt.<br>
                   <i class="fa-solid fa-check px-2"></i>Certificado del simit.<br>
                   <i class="fa-solid fa-check px-2"></i>No presentar pendientes en la central de riesgos para conductores <span>DATASERVIP.</span><br>
          
  
              </p>
            </div>
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Que requisitos debo tener para afiliar por caja de compensación a mi cónyuge o compañero? <img src="{{asset('img/icon-cruz.png')}}"  alt=""> </p>
              <p class="respuesta"> 
              
          
                  <i class="fa-solid fa-check px-2" ></i>Fotocopia de la cédula ampliada al 150%<br>
                  <i class="fa-solid fa-check px-2" ></i>Certificado de matrimonio o certificado extrajuicio de convivencia
          
  
              </p>
            </div>
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Que requisitos debo tener para afiliar por caja de compensación a mis hijos o hijastros? <img src="{{asset('img/icon-cruz.png')}}"  alt=""> </p>
              <p class="respuesta"> 
              
        
              <i class="fa-solid fa-check px-2" ></i>Fotocopia del registro civil <span> - </span><strong>Obligatorio</strong><br>
              <i class="fa-solid fa-check px-2" ></i>Fotocopia de la tarjeta de identidad ampliada al 150% <span>-</span> <strong>Mayores de 7 años</strong><br>
              <i class="fa-solid fa-check px-2" ></i>Certificado de estudios original y una copia <span>-</span><strong>mayores a 12 años</strong><br>
          
  
              </p>
            </div>
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Donde puedo pedir un certificado? <img src="{{asset('img/icon-cruz.png')}}" alt=""> </p>
              <p class="respuesta"> Proximamente desde la pagina web o acercandose a nuestras oficinas para obtener el certificado a sacar.</p>
            </div>
  
          </div>
  
          <!--Seguridad-->
          <div class="container-preguntas" data-categoria="seguridad">
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Que me asegura mi proteccion de datos virtuales? <img src="{{asset('img/icon-cruz.png')}}"  alt=""> </p>
              <p class="respuesta"> De acuerdo con la Ley Estatutaria 1581 de 2012 de Protección de Datos y normas concordantes, se informa al usuario que los datos consignados en el presente formulario serán incorporados en una base de datos responsabilidad de TAX POBLADO SAS, siendo tratados con
                 la finalidad de realizar, gestión administrativa, marketing y prospección comercial.</p>
            </div>
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Cual es la politica de privacidad? <img src="{{asset('img/icon-cruz.png')}}" alt=""> </p>
              <p class="respuesta"> En cumplimiento de la Ley Estatutaria 1581 de 2.012 de Protección de Datos (L.E.P.D.) y su Decreto reglamentario 1377 de 2.013, el presente Aviso de Privacidad tiene como objeto obtener la autorización expresa e informada del Titular para el tratamiento y la transferencia de sus datos a terceras entidades. </p>
            </div>
  
          </div>
  
          <!--Pasajero-->
          <div class="container-preguntas" data-categoria="pasajero">
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Como puedo solicitar un taxi? <img src="{{asset('img/icon-cruz.png')}}"  alt=""> </p>
              <p class="respuesta">Solicita un taxi desde la app <a style="text-decoration:none" href="{{url('pasajeros/appPasajero')}}">Taxpoblado</a><br>
                Desde la pagina web dando clic <a style="text-decoration:none" href="{{url('pasajeros/SolicitaAqui')}}">Aqui</a>
              
              </p>
            </div>
  
            <div class="container-pregunta">
              <p class="pregunta"> ¿Donde puedo consultar las tarifas de viaje? <img src="{{asset('img/icon-cruz.png')}}"  alt=""> </p>
              <p class="respuesta"> Consulte <a style="text-decoration: none" href="{{url('pasajeros/tarifas')}}">Aqui</a> las tarifas de viaje.</p>
            </div>
  
          
  
          </div>
  
          
  
        </div>
  </main>
  
  
  <script src="{!! asset('js/preguntas.js') !!}"></script>
  <!--Final contenido preguntas-->


@endsection