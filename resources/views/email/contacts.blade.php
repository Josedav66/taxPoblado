<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/contacts.css'])
    
</head>
<body>

    <style>
        h1{
            color: red;
            text-align: center;
            font-size: 20px
            
        }

        p{
            display: block;
            margin: 20px
        }

        .sugerencia{
            widows: 100px;
            height: 100px
        }
    </style>


    <h1>Sugerencias PQRS usuarios taxPoblado</h1>

    <p><strong>Nombre: </strong>{{$contacto['name']}}</p>
    <p><strong>Email: </strong>{{$contacto['email']}}</p>
    <p><strong>celular: </strong>{{$contacto['celphone']}}</p>
    <p><strong>cedula: </strong>{{$contacto['cedula']}}</p>
    <p class="sugerencia"><strong>Sugerencia: </strong>{{$contacto['sugerencia']}}</p>
    <p><strong>Términos: {{$contacto['checkbox']}}</strong></p>

</body>
</html>