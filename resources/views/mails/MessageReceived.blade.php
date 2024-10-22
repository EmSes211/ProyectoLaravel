<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cont{
            background-color: blueviolet;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 10px;
            margin: 100px;
            padding: 5px;
            text-align: center;
        }
        .info{
            background-color:aliceblue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 20px;
            margin-left: 100px;
            padding: 10px;
            text-align: justify;

        }

        ul{
            list-style-type:none;
        }
        
    </style>
</head>
<body>
    
    <div class="cont">
    <h1>Nueva recepción de mensaje</h1>
    </div>
    <ul class="info">
        <li class="nombre">Nombre: {{$msg['name']}}</li>
        <li class="correo">Correo: {{$msg['email']}}</li>
        <li class="contenido">Mensaje: {{$msg['content']}}</li>
    </ul>    
</body>
</html>