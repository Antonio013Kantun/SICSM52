@extends('plantilla2')
{{-- AQUI ES PURO HTML --}}
@section('titulo')
    ESTUDIANTES
@endsection


@section('contenido')
<a href="estudiantes" style="text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Regresar</a>


<div class="container">

    <form action="{{url('estudiantes')}}" method="post" class="mt-10" style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
        <div class="sub">
            <h3>Nuevo  Estudiante:</h3><br/>
        </div>
        @csrf
        <input type="text" name="name_student" placeholder="Nombre" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 3px; border: 1px solid #ccc;">
        @error('name_student')
            <div>{{$message}}</div>
        @enderror
        <input type="text" name="lastname_student" placeholder="Apellido" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 3px; border: 1px solid #ccc;">
        @error('lastname_student')
            <div>{{$message}}</div>
        @enderror
        <input type="number" name="id_student" placeholder="Matricula" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 3px; border: 1px solid #ccc;">
        @error('id_student')
            <div>{{$message}}</div>
        @enderror
        <input type="date" name="birthday" placeholder="Cumpleaños" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 3px; border: 1px solid #ccc;">
        @error('birthday')
            <div>{{$message}}</div>
        @enderror
        <input type="text" name="comments" placeholder="Comentarios" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 3px; border: 1px solid #ccc;">
        @error('comments')
            <div>{{$message}}</div>
        @enderror
        <button type="submit" style="width: 100%; padding: 10px; margin-top: 10px; background-color: #007bff; color: white; border: none; border-radius: 3px; cursor: pointer;">Enviar</button>
    </form>
</div>
@endsection
