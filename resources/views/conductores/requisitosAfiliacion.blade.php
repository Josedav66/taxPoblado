@extends('layouts.app')

@section('title','Requisitos')

@section('content')
<head>
  @vite(['resources/css/requisitosAfiliacion.css'])
</head>



@section('title','Requisitos Afiliación')
<!--Contenido home -  requisitos-->

<div class="container-requisitos">


  <div class="container-requisitos">
    <div class="requisitos">

      <div class="title">
        <h3>Requisitos para afiliación de conductor </h3>
      </div>

      <div class="text-title">
        <p>Si eres conductor y quieres afiliarte con el manejo de nuestra empresa Tax Poblado,
          le sugerimos traer a nuestro punto de atención al cliente los siguientes requisitos.

        </p>


      </div>

      <div class="table-requisitos">
        <ul>
            <li><i class="fa-solid fa-check"></i>Hoja de vida</li>
            <li><i class="fa-solid fa-check"></i>2 copias de cédula al 150%</li>
            <li><i class="fa-solid fa-check"></i>2 copias licencia conducción al 150%</li>
            <li><i class="fa-solid fa-check"></i>Certificado de Eps o Adres</li>
            <li><i class="fa-solid fa-check"></i>Certificado de pensión o resolución de pensión <span>en caso de ser pensionado</span></li>
            <li><i class="fa-solid fa-check"></i>Certificado de procuraduria</li>
            <li><i class="fa-solid fa-check"></i>Certificado del runt</li>
            <li><i class="fa-solid fa-check"></i>Certificado del simit</li>
            <li><i class="fa-solid fa-check"></i>No presentar pendientes en la central de riesgos para conductores <span>DATASERVIP</span></li>
        </ul>
      </div>

      <div class="text-nota">
        <div class="nota-2">
        <p><strong>Nota: </strong> Si su EPS es <strong> SURA</strong> y sus beneficiarios no se encuentran afiliados <strong> es su responsabilidad afiliarlos directamente en su EPS</strong>.
        </p>
       
        </div>
        <div class="nota-1">
          <p>      Para el momento de la afiliación debe presentar la documentación del grupo familiar
           con excepción del certificado de estudio que podra enviarlo posterior a la afiliación al correo de comfama.</p>
        </div>
        <p class="correo-nota"><strong>correspondencia@comfama.com.co</strong></p>
      </div>


    </div>
  </div>

  <div class="container-nota-final">
    <p><strong>Las afiliaciones de conductores serán en los siguientes horarios:</strong> </p>
    <div class="horario">
      <p><span>Mañana: </span> <strong>8:00 AM - 12:00 PM</strong> </p>
      <p><span>Tarde: </span><strong>13:00 PM - 16:00 PM</strong> </p>
    </div>
  </div>

  <div class="dudas">
    <p>Alguna otra duda consultala <a href="{{url('/contactanos/preguntas')}}">Aqui</a> o consultando con nuestro chat de whatsapp en el logotipo de la parte inferior derecha.</p>
  </div>

  <div class="politica-privacidad">
    <p>Politica de privacidad, para más información consulta <a href="{{url('/externos/consentimientoWeb')}}">Aqui.</a></p>
  </div>



</div>





   @endsection
