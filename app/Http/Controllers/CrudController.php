<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;  // use this while working with img
use App\Models\Crud2;

class CrudController extends Controller
{
    //
    function insert(Request $req){
        $data = new Crud2(); // create instance of Crudl class
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->address = $req->address;
        $data->gender = $req->gender;
        $data->date = $req->date;
        $data->course = $req->course;
        $data->hobbies = implode(",", $req->hobb);

        // $data->img = $req->file('img');
        $img = Storage::disk('public')->put('images', $req->file('img'));
        $imgArray = explode("/", $img);
        $imgEnd = end($imgArray);
        $imgname = $imgEnd;

        $data->img = $imgname;

        $res = $data->save();
        if($res){
            return redirect("/profile");
        }
         
        // return "insert controller";
        //  $img = $req->file('img');
            //  echo $img;
            // return $req;
    }

    function display(){
        $data = Crud2::all(); 
        return view("displayView", ['data'=>$data]);
        // return "display controller";
    }

    function edit(){
        return "edit controller";
    }

    function update(){
        return "update controller";
    }

    function delete($id){
        $res = Crud2::destroy($id);
        if($res){
            return redirect("/dispData");
        }
        // return "delete controller";
    }

    function search(Request $req){
        $search = $req->search;
        $data = Crud2::where('name', 'like', "%$search%")->get();
        return view("displayView", ['data'=>$data, 'search'=> $search]);
        // return "search controller";
    }
}
