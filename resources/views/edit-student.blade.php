@extends('plantilla2')

@section('titulo', 'Formulario de Edición de Estudiantes')

@section('contenido')
    <div class="back-button">
        <a href="../../estudiantes">
            <button type="button" class="btn btn-primary">
                Regresar
            </button>
        </a>
    </div>

    <form action="{{ route('estudiantes.update', $student->id) }}" method="POST" class="card" style="max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f8f8f8; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf
        @method("put")

        <h1 align='center'>Editar Estudiante</h1>

        <div class="form-group">
            <label for="name_student">Nombre:</label>
            <input type="text" name="name_student" value="{{ $student->name_student }}" class="form-control">
            @error('name_student')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="lastname_student">Apellido:</label>
            <input type="text" name="lastname_student" value="{{ $student->lastname_student }}" class="form-control">
            @error('lastname_student')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="birthday">Apellido:</label>
            <input type="text" name="birthday" value="{{ $student->birthday }}" class="form-control">
            @error('birthday')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="comments">Comentarios:</label>
            <input type="text" name="comments" value="{{ $student->comments }}" class="form-control">
            @error('comments')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Editar</button>
    </form>
@endsection
