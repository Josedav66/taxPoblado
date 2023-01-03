@extends('layouts.app')

@section('title','Requisitos')

@section('content')

<head>
  @vite(['resources/css/requisitosAfiliacionCompensacion.css'])
</head>

 

<!--Contenido home -  requisitos Afiliación Caja Compensación-->

    <div class="container-compensacion">
        <div class="title-compensacion">
            <h3>Requisitos para afiliación a caja de compensación</h3>
            <p>Para la afiliación a caja de compensación por parte de <strong>Tax Poblado</strong>,
               le sugerimos entregar la siguiente documentación a nuestro punto de atención al cliente</p>
        </div>

        <div class="requisito-compañero">
            <h4>Cónyuge o compañera permanente</h4>
            <p><i class="fa-solid fa-check"></i>Fotocopia de la cédula ampliada al 150%</p>
            <p><i class="fa-solid fa-check"></i>Certificado de matrimonio o certificado extrajuicio de convivencia</p>
        </div>

        <div class="requisito-hijos">
            <h4>Hijos o hijastros</h4>
            <p><i class="fa-solid fa-check"></i>Fotocopia del registro civil <span> - </span><strong>Obligatorio</strong></p>
            <p><i class="fa-solid fa-check"></i>Fotocopia de la tarjeta de identidad ampliada al 150% <span>-</span> <strong>Mayores de 7 años</strong></p>
            <p><i class="fa-solid fa-check"></i>Certificado de estudios original y una copia <span>-</span><strong>mayores a 12 años</strong></p>
        </div>

        <div class="nota">
            <p><strong> Todos los documentos deben ser totalmente legibles y no deben estar ni arrugados ni ajados.</strong></p>
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

 