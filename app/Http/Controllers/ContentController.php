<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;

class ContentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function index(){
        $result = Content::all();

        if($result){
            $data['code'] =200;
            $data['result'] = $result;
        }else {
            $data['code'] =500;
            $data['result'] = 'error';
        }
        return response()->json($data);
    }

    public function store(Request $request){
        $result = Content::create([
            'title' =>$request ->title,
            'text' =>$request ->text
        ]);
        if($result){
            $data['code'] =200;
            $data['result'] = $result;
        }else {
            $data['code'] =500;
            $data['result'] = 'error';
        }
        return response($data);
    }

    public function show($id){
        $result = Content::where('id_content',$id)->first();
        if($result){
            $data['code'] =200;
            $data['result'] = $result;
        }else {
            $data['code'] =500;
            $data['result'] = 'error';
        }
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $result = Content::where('id_content',$id)->first();

        $result->title = $request->title;
        $result->text = $request->text;

        if($result){
            $data['code'] =200;
            $data['result'] = $result;
        }else {
            $data['code'] =500;
            $data['result'] = 'error';
        }
        return response($data);
    }

    public function destroy($id){
        $result = Content::find($id);
        if($result){
            $data['code'] =200;
            $data['result'] = $result;
        }else {
            $data['code'] =500;
            $data['result'] = 'error';
        }
        return response($data);
    }


}
