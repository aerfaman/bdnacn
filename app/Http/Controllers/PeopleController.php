<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\People;
use Input;
use Redirect;
class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $people=People::all();
        return view('hardware.People')->withPeople($people);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createpeople(Request $request)
    {
        $people=new People;
        $people->name=Input::get('name');
        $people->title=Input::get('title');
        $people->department=Input::get('department');
        $people->phone=Input::get('phone');
        $people->email=Input::get('email');
        $people->save();
        return Redirect::back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
