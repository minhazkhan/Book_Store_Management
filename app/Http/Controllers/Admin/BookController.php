<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Addbook;


class BookController extends Controller
{


   public function create(Request $request){


   		$request->validate([
    		'bookname'=>'required',
    		'desc'=>'required|min:5|max:100',
    		'author'=>'required',
    		'page'=>'required',
            'image'=>'required',
    		
    	]);

        $res=new Addbook;
        $res->bookname=$request->input('bookname');
        $res->desc=$request->input('desc');
        $res->author=$request->input('author');
        $res->page=$request->input('page');

        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('upload/books/',$filename);
            $res->image = $filename;
        }
        else
        {
            return $request;
            $res->image = '';
        }
        $res->save();

        return redirect()->route('admin.addbook')->with('success','Books Inserted Successfully');
        
    }

    public function index()
    {

        /*$creds = $request->only('bookname','desc','author','page');

            if(Auth::guard('web')->attempt($creds)){
                return redirect()->route('admin.home');*/
        $data = Addbook::all()->count();
        return view('admin.home', compact('data'));
        //return view('admin/home')->with('books',$data);
         


/*
         return view('admin.home')->with('books',Addbook::all());
    	$books= Addbook::all();
        return view('home',['addbooks'=>$books]);*/
    }
}
