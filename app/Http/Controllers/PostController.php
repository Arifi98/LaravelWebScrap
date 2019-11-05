<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return "it is working" . $id;
    }


    public function create()
    {
        return "create Method";
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return "this is show method" . $id;
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function ShowJson(){
        return "ok";

    }


}
