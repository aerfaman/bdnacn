<?php

namespace App\Http\Controllers;

use App\asset;
use App\devices;
use App\Http\Controllers\Controller;
use App\People;
use Illuminate\Http\Request;
use Input;
use Redirect;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $people = People::all();
        $cpu = asset::whereRaw('status = "idle" and type = "cpu"')->get();
        $memory = asset::whereRaw('status="idle" and type="memory"')->get();
        $mainboard = asset::whereRaw('status="idle" and type="mainboard"')->get();
        $harddisk = asset::whereRaw('status="idle" and type="harddisk"')->get();
        return view('hardware.devices')->withDevices(devices::all())->withPeople($people)->withCpu($cpu)->withMemory($memory)->withMainboard($mainboard)->withHarddisk($harddisk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getassetfromdevice()
    {
        $devices = devices::find(Input::get('id'));
        $owner = $devices->belongsTopeople;
        $asset = $devices->hasManyasset()->where('status','<>','deleted')->get();
        $asset['owner'] = $owner;

        return $asset;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function createdevice(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mac' => 'regex:/^([0-9a-fA-F]{2})(([\s:-][0-9a-fA-F]{2}){5})$/',
        ]);
        $device = new devices;
        if (Input::get('createat') == "") {
            $createat = date('Y-m-d');
        } else {
            $createat = Input::get('createat');
        }
        $device->name = Input::get('name');
        $device->system = Input::get('system');
        $device->mac = Input::get('mac');
        $device->ip = Input::get('ip');
        $device->type = Input::get('type');
        $device->people_id = Input::get('owner');
        $device->remark=Input::get('remark');
        $device->created_at = $createat;
        $device->save();
        $assetAaary=['cpu','memory','mainboard','harddisk'];
        foreach ($assetAaary as $a) {
            if (!Input::get($a) == "") {
                $allAsset = explode(';', Input::get($a));
                foreach ($allAsset as $key) {    
                    if (strpos($key,'##')) {
                        $id = explode('##',$key)[0];
                        $asset = asset::find($id);
                        if ($asset->status=='using') {
                            $message=[
                                'message' => $key.'already using',
                            ];
                            return Redirect::back()->withInput()->withErrors($message);
                        }
                        $asset->status = 'using';
                        $asset->device_id = $device->id;
                        $asset->save();
                    } else {
                        $asset = new asset;
                        $asset->type = $a;
                        $asset->name = $key;
                        $asset->status= 'using';
                        $asset->device_id = $device->id;
                        $asset->created_at = $createat;
                        $asset->save();
                    }
                }  
            }
        }
        
        $message = [
            'message' => 'create new device success',
        ];
        return Redirect::back()->withInput()->withErrors($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return devices::find(Input::get('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $people = People::all();
        $cpu = asset::whereRaw('status = "idle" and type = "cpu"')->get();
        $memory = asset::whereRaw('status="idle" and type="memory"')->get();
        $mainboard = asset::whereRaw('status="idle" and type="mainboard"')->get();
        $harddisk = asset::whereRaw('status="idle" and type="harddisk"')->get();
        $device=devices::find($id);
        $owner = $device->belongsTopeople;
        $device['owner']=$owner;
        $asset=array();
        $asset['cpu']=asset::whereRaw('type="cpu" and device_id='.$id.' and status="using"')->get();
        $asset['memory']=asset::whereRaw('type="memory" and device_id='.$id.' and status="using"')->get();
        $asset['harddisk']=asset::whereRaw('type="harddisk" and device_id='.$id.' and status="using"')->get();
        $asset['mainboard']=asset::whereRaw('type="mainboard" and device_id='.$id.' and status="using"')->get();
        return view('hardware.editdevice')->withDevices($device)->withPeople($people)->withCpu($cpu)->withMemory($memory)->withMainboard($mainboard)->withHarddisk($harddisk)->withAsset($asset);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function editdevice($id)
    {
        $device=devices::find($id);
        $device->name = Input::get('name');
        $device->system = Input::get('system');
        $device->mac = Input::get('mac');
        $device->ip = Input::get('ip');
        $device->type = Input::get('type');
        $device->people_id = Input::get('owner');
        $device->remark=Input::get('remark');
        $device->save();
        $assetAaary=['cpu','memory','mainboard','harddisk'];
        foreach ($assetAaary as $a) {
            if (!Input::get($a) == "") {
                $allAsset = explode(';', Input::get($a));
                foreach ($allAsset as $key) {    
                    if (strpos($key,'##')) {
                        $id = explode('##',$key)[0];
                        $asset = asset::find($id);
                        if ($asset->status=='using') {
                            $message=[
                                'message' => $key.'already using',
                            ];
                            return Redirect::back()->withInput()->withErrors($message);
                        }
                        $asset->status = 'using';
                        $asset->device_id = $device->id;
                        $asset->save();
                    } else {
                        $asset = new asset;
                        $asset->type = $a;
                        $asset->name = $key;
                        $asset->status='using';
                        $asset->device_id = $device->id;
                        $asset->created_at = date('Y-m-d');
                        $asset->save();
                    }
                }  
            }
        }
        return Redirect::back();
    }
    public function deletedevice()
    {
        $id=Input::get('id');
        $device=devices::find($id);
        $device->delete();
        $asset=$device->hasManyasset()->get();
        foreach ($asset as $a){
            $a->status='idle';
            $a->save();
        }
        return 'success';
    }
    public function deletedeviceall()
    {
        $id=Input::get('id');
        $device=devices::find($id);
        $asset=$device->hasManyasset()->get();
        foreach ($asset as $a){
            // dd($a);
            $a->status='deleted';
            $a->save();
        }
        $device->delete();
        return 'success';
    }
    
}
