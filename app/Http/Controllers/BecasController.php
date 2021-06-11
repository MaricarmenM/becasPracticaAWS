<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BecasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumnos::all();
        return view('becasadmin.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('becasadmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumnos();
        $alumno->noControl = $request->get('noControl');
        $alumno->nombre = $request->get('nombre');
        $alumno->genero = $request->get('genero');
        $alumno->semestre = $request->get('semestre');
        $alumno->carrera = $request->get('carrera');
        $alumno->fechaNacimiento = $request->get('fechaNacimiento');
        $alumno->domicilio = $request->get('domicilio');
        $alumno->tipoBeca = $request->get('tipoBeca');
       if ($request->hasFile('cartaMotivos')){
           $filename = "motivos_". uniqid() . "." . $request->file('cartaMotivos')->getClientOriginalExtension();
           $alumno->cartaMotivos=$filename;
           $path=$request->file('cartaMotivos')->storeAs('data/cartas/',$filename,'s3');
           Storage::disk('s3')->setVisibility($path,'public');
       } 
       if ($request->hasFile('identificacion')){
        $filename = "ident_". uniqid() . "." . $request->file('identificacion')->getClientOriginalExtension();
        $alumno->identificacion=$filename;
        $path=$request->file('identificacion')->storeAs('data/ids/',$filename,'s3');
        Storage::disk('s3')->setVisibility($path,'public');
        } 
        if ($request->hasFile('comprobanteDom')){
            $filename = "cmp_". uniqid() . "." . $request->file('comprobanteDom')->getClientOriginalExtension();
            $alumno->comprobanteDom=$filename;
            $path=$request->file('comprobanteDom')->storeAs('data/comprobantes/',$filename,'s3');
            Storage::disk('s3')->setVisibility($path,'public');
         } 
         $alumno->created_at= date('Y-m-d H:i:s');
         $alumno->updated_at= date('Y-m-d H:i:s');
         $alumno->save();
         return redirect('becasadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
