<?php

namespace App\Http\Controllers;
use App\Models\Sisa_Alumnos;
use Illuminate\Http\Request;

class Sisa_AlumnosController extends Controller
{
    public function index()
    {
        $Sisa_Alumnos = Sisa_Alumnos::all();
        return response()->json($Sisa_Alumnos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'codAlumno' => 'nullable|string|max:20',
            'apPaterno' => 'nullable|string|max:50',
            'apMaterno' => 'nullable|string|max:50',
            'nombre' => 'required|string|max:50',
            'documento' => 'nullable|string|max:20',
            'fechaNacimiento' => 'nullable|date',
            'sexo' => 'nullable|string|max:1',
            'idEspecialidad' => 'required|integer|unsigned',
            'idGrado' => 'required|integer|unsigned',
            'estado' => 'nullable|integer|max:4',
            'idDepartamento' => 'required|integer',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string|max:25',
            'email' => 'nullable|string|email|max:60',
            'idUnidadAcademica' => 'required|integer',
            'alumno' => 'required|string|max:160',
            'ingreso' => 'nullable|string|max:10',
            'egreso' => 'nullable|string|max:10',
        ], [
            // Agrega mensajes según sea necesario
        ]);

        $Alumno = Sisa_Alumnos::create($request->all());

        return response()->json(['data' => $Alumno, 'message' => 'Alumno creado con éxito'], 201);
    }

    

    public function show($id)
    {
        $alumno = Sisa_Alumnos::findOrFail($id);
        return response()->json($alumno);
    }
    
    public function showporcodigo($codigo)
    {
        $alumno = Sisa_Alumnos::where('codAlumno', $codigo)->get();
        return response()->json($alumno);
    }

    public function showporappaterno($appaterno)
    {
        $alumno = Sisa_Alumnos::where('apPaterno', $appaterno)->get();
        return response()->json($alumno);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'codAlumno' => 'nullable|string|max:20',
            'apPaterno' => 'nullable|string|max:50',
            'apMaterno' => 'nullable|string|max:50',
            'nombre' => 'required|string|max:50',
            'documento' => 'nullable|string|max:20',
            'fechaNacimiento' => 'nullable|date',
            'sexo' => 'nullable|string|max:1',
            'idEspecialidad' => 'required|integer|unsigned',
            'idGrado' => 'required|integer|unsigned',
            'estado' => 'nullable|integer|max:4',
            'idDepartamento' => 'required|integer',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string|max:25',
            'email' => 'nullable|string|email|max:60',
            'idUnidadAcademica' => 'required|integer',
            'alumno' => 'required|string|max:160',
            'ingreso' => 'nullable|string|max:10',
            'egreso' => 'nullable|string|max:10'
        ]);

        $alumno = Sisa_Alumnos::findOrFail($id);
        $alumno->update($request->all());

        return response()->json($alumno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrativo  $administrativo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Sisa_Alumnos::findOrFail($id);
        $alumno->delete();

        return response()->json(['message' => 'Alumno eliminado correctamente']);
    }

}
