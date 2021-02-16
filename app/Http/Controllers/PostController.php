<?php

namespace App\Http\Controllers;

use Exception;
use Validator;
use File;

// use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Posts;


class PostController extends Controller
{
    //
    public function index($id){
        // print($id);die;
        return view('practice.Post_Crud.post')->with('id',$id);
    }

    public function AddPost(Request $request){
        try{
            $input = $request->all();
            // print_r($input);die;
            $rules = array(
                'title'     =>     'required|alpha',
                'files'     =>     'image|mimes:jpg,png,jpeg,gif,svg|max:2048',    /* Image Validation */ 
                'description'  =>  'required|max:255',  
            );    
            $messages = array(
                            'title.alpha'       => 'Only Alphabets allowed in User name',
                            'files.image'       => 'Must be a Image',
                            'description.max'      => 'Maximum Characters allowed is 255',
                        );
    
            $validator = Validator::make( $request->all(), $rules, $messages);
            if($validator->fails()){
                $result     =   array(
                                    'status'    => false,
                                    'error'     => $validator->getMessageBag()->toArray()
                                );
            }
            else{
              
                $input              = $request->all();
                if($request->has('files'))
                {
                    $name = $request->file('files')->getClientOriginalName();
                    $request->file('files')->move(public_path('post_files'), $name);
                    $input['post_files']    =   'post_files/'.$name;
                }
                $insert = Posts::create($input);
                if(!$insert){
                    $result     =   array(
                        'status'    => false,
                        'message'   => 'Error in Inserting'
                    );
                }
                else{
                    $result     =   array(
                        'status'    => true,
                        'message'   => 'Post Successfully Added'
                    );
                }
            
            }
        }
        catch(Exception $e){
            $result     =   array(
                                'status'    =>  false,
                                'message'   =>  $e->getMessage()
                            );
        }
        return response()->json($result);
    }    
}
