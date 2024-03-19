<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(10); // Mostrar 10 elementos por página
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $student = new Student;
        $student->name_student = $request->name_student;
        $student->lastname_student = $request->lastname_student;
        $student->id_student = $request->id_student;
        $student->birthday = $request->birthday;
        $student->comments = $request->comments;
        $student->save();

        return redirect()->route('estudiantes.index')->with('success', 'Datos agregados exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $student = Student::find($id);
    $student->update([
        'name_student' => $request->input('name_student'),
        'lastname_student' => $request->input('lastname_student'),
        'birthday' => $request->input('birthday'),
        'comments' => $request->input('comments'),
    ]);
    return redirect()->route('estudiantes.index')->with('notificacion', 'Estudiante editado correctamente');
}






    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect()->route('estudiantes.index')->with('error', 'Estudiante no encontrado.');
        }

        $student->delete();
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente.');
    }
}
