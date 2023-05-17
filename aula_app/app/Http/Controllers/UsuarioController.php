<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioCOntroller extends Controller
{

    private $objetoUsuario;


    public function __construct()
    {
        $this->objetoUsuario = new User(); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = $this->objetoUsuario->all();
        return view('index', compact('usuario'));
        //dd($this->objetoUsuario->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $name = request("name");
        $email = request("email");
        $password = request("password");

       $this->objetoUsuario->insert(["name" => $name, "email" => $email, "password" => $password]);
       return redirect("/user");
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
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
        $name = request("name");
        $email = request("email");
        $password = request("password");

        $this->objetoUsuario->where("id", "=", $id)->update(["name" => $name, "email" => $email, "password" => $password]);
        return redirect("/user");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objetoUsuario->where("id", "=", $id)->delete();
        return redirect("/user");
    }
}
