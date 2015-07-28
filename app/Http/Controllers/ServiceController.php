<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Input;
use Redirect;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $service=Service::all();
        return view('hardware.service')->withService($service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createservice()
    {
        $service = new service;
        $service->name=Input::get('name');
        $service->type=Input::get('type');
        $service->controladdress=Input::get('address');
        $service->loginusername=Input::get('username');
        $service->loginpassword=Input::get('password');
        $service->remark=Input::get('remark');
        $service->device_ip=Input::get('ip');
        $service->save();
        return Redirect::back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
