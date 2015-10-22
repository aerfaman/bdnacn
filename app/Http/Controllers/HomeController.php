<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\asset;
use App\People;
use Input;
use App\devices;
use App\Ip2mac;
use App\Vminfo;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function search()
    {
        # Replace the '-' to ':' in data got from ajax.
        $searchValue=preg_replace("/-/",":",Input::get('mac'));
        # To judge whether the data  a MAC address.
        if (preg_match('/[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}/',$searchValue)){

            $searchInfo['html']='';
            $ip=Ip2mac::where('mac','=',$searchValue)->first();
            $device=devices::where('mac','=',$searchValue)->first();
            $vm=Vminfo::where('mac','=',$searchValue)->first();
            if ($vm){
                if ($vm['type']=="VirtualRouter"){
                    $natmapValue=[];
                    $natmap=explode(';',$vm['natmap']);
                    $searchInfo['html'].='<dl>这是一个虚拟路由VM的MAC地址,在这个路由下面的VM是由这个MAC地址出来的,所以可能会有其他IP地址也是这个MAC的情况.</dl>';
                    $searchInfo['html'].='<dt>VM belong to me:</dt>';
                    foreach($natmap as $n){
                        // $natmapValue[explode(':',$n)[1]]=explode(':',$n)[0];
                        $searchInfo['html'].='<dl>'.explode(':',$n)[0].'</dl>';
                    }
                    
                }
            }
            $searchInfo['html'].=$ip ? '<dt>IP</dt><dl>'.$ip['ip'].'</dl>':'';
            $searchInfo['html'].=$device ? '<dt>Device Name</dt><dl><a href="/editdevice/'.$device['id'].'">'.$device['name'].'</a></dl>':'';
            $searchInfo['html'].=$vm ? '<dt>VM Name</dt><dl>'.$vm['vmname'].'</dl><dt>VMhost</dt><dl>'.$vm['vmhost'].'</dl><dt>Network</dt><dl>'.$vm['network'].'</dl>':'';
        }
        elseif(preg_match('/([0-9]{1,3}\.{1}){3}[0-9]{1,3}/',$searchValue)){
            $execMac=exec('python c:\py\ip2mac-2.py --start='.$searchValue.' --end='.$searchValue);
            $searchInfo['powerStatus']=$execMac?'poweron':'poweroff';
            $searchInfo['html']=$execMac?'<dt>mac</dt><dl>'.$execMac.'</dl>':'';
            $ip=Ip2mac::where('ip','=',$searchValue)->first();
            $device=devices::where('ip','=',$searchValue)->first();
            $vm=Vminfo::where('mac','=',$ip['mac'])->first();
            if ($vm){
                if ($vm['type']=="VirtualRouter"){
                    $natmapValue=[];
                    $natmap=explode(';',$vm['natmap']);
                    foreach($natmap as $n){
                        $natmapValue[explode(':',$n)[1]]=explode(':',$n)[0];
                    }
                    if ($a=array_search($searchValue,$natmapValue)){
                        $vm=Vminfo::whereInt_ipAndNetwork($a,$vm['network'])->first();
                    }
                }
            }
            $searchInfo['html'].=$device ?'<dt>Device Name</dt><dl><a href="/editdevice/'.$device['id'].'">'.$device['name'].'</a></dl>':'';
            $searchInfo['html'].=$vm ? '<dt>VM Name</dt><dl>'.$vm['vmname'].'</dl><dt>VMhost</dt><dl>'.$vm['vmhost'].'</dl><dt>Network</dt><dl>'.$vm['network'].'</dl>':'';
        }else{
            $searchInfo['status']='faile';
            return $searchInfo;
        }
        $searchInfo['status']='success';
        // $ip=Ip2mac::where('mac','=',Input::get('mac'))->get();
        // $searchInfo['ip']=$ip;
        // $searchInfo['service']=$service;
        return $searchInfo;
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
