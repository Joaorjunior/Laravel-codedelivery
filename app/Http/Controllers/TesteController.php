<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Controllers\Controller;

class TesteController extends Controller
{
    /*
     * Display a listing of the resource.
     * @return Response
     */
    public function index() //Get para pegar uma coleзгo de dados
    {
        //
    }


    /*
     * Show the form for creating a new resource.
     * @return Reponse
     */
    public function create() //API - Nгo precisa do create nem do edit
    {
        //
    }


    /*
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) //Post para incluir dados
    {
        //
    }

    /*
     * Display the specified resource.function
     * @param int $id
     * @return Response
     */
    public function show($id) // Mostrar apenas um dado, usando o Get com id
    {
        //

    }


    /*
     * Show the form for editing the specified resource
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /*
     * Update the specified resource in storage
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id) //Atualizar um dado inteiro, usando o Put
    {
        //
    }


    /*
     * Remove the specified resource from storage
     * @param int $id
     * @return Response
     */
    public function destroy($id) //Delete
    {

    }





















}
