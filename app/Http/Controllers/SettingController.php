<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.setting.index',[
            'settings'=>Setting::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
        ]);
        $setting=new Setting();
        $setting->name=$request->name;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        $setting->address=$request->address;
        $setting->sat=$request->sat;
        $setting->sun=$request->sun;
        $setting->mon=$request->mon;
        $setting->tue=$request->tue;
        $setting->wed=$request->wed;
        $setting->thu=$request->thu;
        $setting->fri=$request->fri;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->linkedin=$request->linkedin;
        $setting->instagram=$request->instagram;
        if ($request->dark_logo) {
            $setting->dark_logo = $this->getImgUrl($request,'dark_logo');
        }
        if ($request->white_logo) {
            $setting->white_logo = $this->getImgUrl($request,'white_logo');
        }

        if ($request->favicon) {
            $setting->favicon = $this->getImgUrl($request,'favicon');
        }
        $setting->save();
        Session::flash('success','setting store successfully');
        return redirect()->route('settings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.setting.show',[
            'setting'=>Setting::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.setting.edit',[
            'setting'=>Setting::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
        ]);
        $setting=Setting::find($id);
        $setting->name=$request->name;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        $setting->address=$request->address;
        $setting->sat=$request->sat;
        $setting->sun=$request->sun;
        $setting->mon=$request->mon;
        $setting->tue=$request->tue;
        $setting->wed=$request->wed;
        $setting->thu=$request->thu;
        $setting->fri=$request->fri;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->linkedin=$request->linkedin;
        $setting->instagram=$request->instagram;
        if($request->file('dark_logo')){
            if(file_exists($setting->dark_logo)){
                unlink($setting->dark_logo);
            }
            $setting->dark_logo = $this->getImgUrl($request,'dark_logo');
        }
        if($request->file('white_logo')){
            if(file_exists($setting->white_logo)){
                unlink($setting->white_logo);
            }
            $setting->white_logo = $this->getImgUrl($request,'white_logo');
        }
        if($request->file('favicon')){
            if(file_exists($setting->favicon)){
                unlink($setting->favicon);
            }
            $setting->favicon = $this->getImgUrl($request,'favicon');
        }
        $setting->save();
        Session::flash('success','setting Updated successfully');
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $setting=Setting::find($id);
        if(file_exists($setting->dark_logo)){
            unlink($setting->dark_logo);
        }
        if(file_exists($setting->white_logo)){
            unlink($setting->white_logo);
        }
        if(file_exists($setting->favicon)){
            unlink($setting->favicon);
        }
        $setting->delete();
        Session::flash('success','setting Delete successfully');
        return back(); 
    }

    public function getImgUrl($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = rand() . '.' . $file->getClientOriginalExtension();
        $dir = 'adminAsset/settings/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }

}
