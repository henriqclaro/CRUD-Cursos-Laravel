<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CursoControllerApi extends Controller
{
    public function store(Request $req)
    {
        $novoCuso = Curso::created($req->all());
        return response($novoCuso, 201);
    }

    public function index()
    {
        return Curso::all();
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        if ($curso <> null) {
            return response($curso, 200);
        } else {
            return response(
                '',
                404
            );
        }
    }

    public function update(Request $req, $id)
    {
        if (Curso::find($id)->update($req->all())) {
            return response('OK', 200);
        } else {
            return response(
                '',
                404
            );
        }
    }

    public function destroy($id)
    {
        $cursoEncontrado = Curso::find($id);
        if ($cursoEncontrado) {
            if ($cursoEncontrado->delete()) {
                return response('OK', 200);
            } else {
                return response(
                    '',
                    400
                );
            }
        } else {
            return response(
                '',
                404
            );
        }
    }
}
