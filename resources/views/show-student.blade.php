@extends('plantilla2')

@section('titulo', 'Detalles del Estudiante')

@section('contenido')
    <div class="back-button my-4">
        <a href="../../estudiantes">
            <button type="button" class="btn btn-primary">
                Regresar
            </button>
        </a>
    </div>

    <div class="card bg-body-secondary shadow-sm rounded px-4 py-4 mb-4" style="max-width: 400px; margin: 0 auto;">
        <h1 class="text-center text-xl font-bold mb-4">Detalles del Estudiante</h1>
        <p class="mb-2"><span class="font-weight-bold">ID del estudiante:</span> {{$student->id_student}}</p>
        <p class="mb-2"><span class="font-weight-bold">Nombre del estudiante:</span> {{$student->name_student}}</p>
        <p class="mb-2"><span class="font-weight-bold">Apellido del estudiante:</span> {{$student->lastname_student}}</p>
        <p class="mb-2"><span class="font-weight-bold">Fecha de nacimiento:</span> {{$student->birthday}}</p>
        <p class="mb-2"><span class="font-weight-bold">Comentarios:</span> {{$student->comments}}</p>
    </div>
@endsection
