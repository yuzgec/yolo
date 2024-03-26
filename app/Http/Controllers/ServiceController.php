<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Spatie\Image\Image;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Artisan;

class ServiceController extends Controller
{

    public function __construct(){
        Artisan::call('cache:clear');
    }

    public function index()
    {
        $All = Service::with('getCategory')->orderBy('rank')->where('category', \request('category'))->get();
        $Kategori = ServiceCategory::all();
        return view('backend.service.index', compact('All', 'Kategori'));
    }

    public function create()
    {
        $Kategori = ServiceCategory::pluck('title', 'id');
        return view('backend.service.create',  compact('Kategori'));
    }


    public function store(ServiceRequest $request)
    {
        $New = new Service;
        $New->title = $request->title;
        $New->category = $request->category;
        $New->short = $request->short;
        $New->desc = $request->desc;

        $New->seo_desc = $request->seo_desc;
        $New->seo_key = $request->seo_key;
        $New->seo_title = $request->seo_title;

      
        if($request->hasfile('image')){
            $New->addMedia($request->image)->toMediaCollection('page');
        }


        if($request->hasfile('cover')){
            $New->addMedia($request->image)->toMediaCollection('page');
        }

        if($request->hasfile('gallery')) {
            foreach ($request->gallery as $item){
                $New->addMedia($item)->toMediaCollection('gallery');
            }
        }
        $New->save();

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('service.index',['category' => $request->category, 'name' => $request->name]);

    }


    public function show($id)
    {
        $Show = Service::findOrFail($id);
        return view('frontend.service.index', compact('Show'));
    }

    public function edit($id)
    {
        $Edit = Service::findOrFail($id);
        $Kategori = ServiceCategory::pluck('title', 'id');
        return view('backend.service.edit', compact('Edit', 'Kategori'));
    }

    public function update(ServiceRequest $request, $id)
    {

        //dd($request->all());
        $Update = Service::findOrFail($id);
        $Update->title = $request->title;
        $Update->category = $request->category;
        $Update->short = $request->short;
        $Update->desc = $request->desc;

        $Update->seo_title = $request->seo_title;
        $Update->seo_desc = $request->seo_desc;
        $Update->seo_key = $request->seo_key;

        if($request->removeImage == "1"){
            $Update->media()->where('collection_name', 'page')->delete();
        }

        if($request->removeCoverImage == "1"){
            $Update->media()->where('collection_name', 'cover')->delete();
        }

        if ($request->hasFile('image')) {
            $Update->media()->where('collection_name', 'page')->delete();
            $Update->addMedia($request->image)->toMediaCollection('page');
        }

        if ($request->hasFile('cover')) {
            $Update->media()->where('collection_name', 'cover')->delete();
            $Update->addMedia($request->cover)->toMediaCollection('cover');
        }

        if($request->hasfile('gallery')) {
            foreach ($request->gallery as $item){
                $Update->addMedia($item)->toMediaCollection('gallery');
            }
        }

        $Update->save();

        toast(SWEETALERT_MESSAGE_UPDATE,'success');
        return redirect()->route('service.index',['category' => $request->category, 'name' => $request->name]);

    }

    public function destroy($id, Request $request)
    {
        $Delete = Service::findOrFail($id);
        $Delete->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('service.index',['category' => $request->category, 'name' => $request->name]);
    }

    public function getTrash(){
        $Trash = Service::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('backend.service.trash', compact('Trash'));
    }

    public function getOrder(Request $request){
        foreach($request->get('service') as  $key => $rank ){
            Service::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update=Service::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }

    public function postUpload(Request $request)
    {

        if($request->hasFile('upload')) {
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Resim Yüklendi';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function deleteGaleriDelete($id){

        $Delete = Service::find($id);
        $Delete->media()->where('id', \request('image_id'))->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->back();

    }
}
