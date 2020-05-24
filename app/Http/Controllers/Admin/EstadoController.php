<?php

namespace ADQUISINET\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\Estado;

class EstadoController extends Controller
{
    public function index()
    {

        $estados=Estado::get();
        return view('admin.estados.index', compact('estados'));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
