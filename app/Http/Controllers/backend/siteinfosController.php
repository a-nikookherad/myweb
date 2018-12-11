<?php

namespace App\Http\Controllers\backend;

use App\models\siteInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class siteinfosController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth','usersMiddleware']);
//    }
    //

    public function list()
    {
        $siteinfos=siteInfo::all();

        return view('backend.items.siteinfos.list',compact('siteinfos'));
    }

    public function edit($id)
    {
        $siteinfo=siteInfo::find($id);
        return view('backend.items.siteinfos.edit',compact('siteinfo'));
    }

    public function edit_post(Request $request,$id)
    {
        $siteinfo=siteInfo::find($id);
        if ($request->file('logo')) {
            if (is_file($siteinfo->logo)) {
                unlink($siteinfo->logo);
            }
            $img = $request->file('logo');
            $imgfullname = str_random(5) . '.' . $img->getClientOriginalExtension();
            $dir = 'asset/upload/logo/';
            if ($img->move($dir, $imgfullname)) {
                $src = $dir . $imgfullname;
            }else {
                $src = null;
            }
        }else {
            $src = null;
        }
        $data=[
            'facebook'  => $request->input('facebook'),
            'twitter'  => $request->input('twitter'),
            'linked_in'  => $request->input('linked_in'),
            'google'  => $request->input('google'),
            'gmail'  => $request->input('gmail'),
            'logo'  => $src,
        ];
        if($data['logo']==null){
            unset($data['logo']);
        }
        if ($siteinfo instanceof  siteInfo) {
            $siteinfo->update($data);
        }
        return redirect()->route('back.siteinfos.list')->with('msg','ویرایش اطلاعات با موفقیت انجام شد.');
    }
}
