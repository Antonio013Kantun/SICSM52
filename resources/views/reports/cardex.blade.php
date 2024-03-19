<?php
// Define la ruta de la imagen
$pathToImage = public_path('image/back.png');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #6d6969;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        b {
            font-weight: bold;
            color: #000;
        }
        .logo {
            width: 100px; /* Tamaño de la imagen */
            height: 100px;
            border-radius: 50%; /* Forma de círculo */
            object-fit: cover; /* Para mantener la proporción de la imagen */
            border: 2px solid #333; /* Borde */
            display: block; /* Para centrar la imagen */
            margin: 0 auto; /* Para centrar la imagen */

        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{$title}}</h1>
        
        <img src="{{ $pathToImage }}" alt="Logo" class="logo">
        <table>
            <tr>
                <th>Nombre del estudiante</th>
                <td><b>{{$details->name_student}}</b></td>
            </tr>
            <tr>
                <th>Apellido del estudiante</th>
                <td><b>{{$details->lastname_student}}</b></td>
            </tr>
            <tr>
                <th>Fecha de cumpleaños</th>
                <td><b>{{$details->birthday}}</b></td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td><b>{{$details->comments}}</b></td>
            </tr>
            
        </table>
    </div>
</body>
</html>
