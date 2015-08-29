<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\asset;
use Input;
use Redirect;
class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('hardware.asset')->withAssets(asset::where('status','<>','deleted')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getdevicefromasset()
    {
        $asset=asset::find(Input::get('id'));
        $device=$asset->belongsTodevice;
        return $device;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function deleteAsset()
    {
        $id=Input::get('id');
        $asset=asset::find($id);
        $asset->status='deleted';
        if($asset->save())
        {
            return 'success';    
        }else{
            return 'faile';
        }
        
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
