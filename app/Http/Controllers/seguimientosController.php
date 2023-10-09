<?php

namespace App\Http\Controllers;

use App\Models\seguimientos;
use Illuminate\Http\Request;

class seguimientosController extends Controller
{
    public function index(){
        return seguimientos::all();
    }

    public function store(Request $request)
    {
        $inputs = $request->input();
        $respuesta = seguimientos::create($inputs);
        return response()->json([
            'data'=>$respuesta,
            'mensaje'=>"Registro creado",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $existe = seguimientos::find($id);
        if (isset($existe)){
            return response()->json([
                'data'=>$existe,
                'mensaje'=>"Registro encontrado",
            ]);  
        }else{
            return response()->json([
                'Error' => true,
                'mensaje'=>"Registro no encontrado",
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $existe = seguimientos::find($id);
        if (isset($existe)){
            $existe-> Nombres = $request -> Nombres;
            $existe-> Apellidos = $request -> Apellidos;
            $existe-> Asunto = $request -> Asunto;
            $existe-> Correo = $request -> Correo;
            $existe-> Telefono = $request -> Telefono;
            $existe-> Fecha = $request -> Fecha;
            $existe-> Dias = $request -> Dias;
            $existe-> fecha_proximo_seguimiento = $request -> fecha_proximo_seguimiento;
            if ($existe -> save()){
                return response()->json([
                    'data'=>$existe,
                    'mensaje'=>"Registro actualizado",
                ]);    
            }else{
                return response()->json([
                    'error' => true,
                    'mensaje'=>"No se logró actualización",
                ]);    
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>"No existe registro",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $existe = seguimientos::find($id);
        if (isset($existe)){
            $res = seguimientos::destroy($id);
            if($res){
                return response()->json([
                    'data'=>[],
                    'mensaje'=>"Registro eliminado",
                ]);  
            }else{
                return response()->json([
                    'Error' => true,
                    'mensaje'=>"Registro no encontrado",
                ]);    
            }
        }else{
            return response()->json([
                'Error' => true,
                'mensaje'=>"Registro no encontrado",
            ]);
        }
    }
}
