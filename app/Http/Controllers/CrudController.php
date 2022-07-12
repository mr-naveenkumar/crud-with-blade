<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Validator;
use Hash;
use Illuminate\Support\Facades\DB;
class CrudController extends Controller
{
    //show create page 
    public function showCreate(){
        return view("crud.create");
    }

    // insert data 
    public function crudInsert(Request $request){
      //  dd($request->all());
      $validation= Validator::make($request->all(),[
        "name"=>"required|min:3",
        "email"=>"required|unique:cruds",
        "password"=>"required|confirmed",
        "detail"=>"required|min:8"
      ]);

      if($validation->fails()){
        return redirect()->back()->withInput()->withErrors($validation);
      }
      $passwordSecure=Hash::make($request->password);

      $insert=Crud::create([
        "name"=>$request->input("name"),
        "email"=>$request->input("email"),
        "password"=>$passwordSecure,
        "detail"=>$request->input("detail"),
      ]);

      $allValue=$insert;
      //dd($allValue);
      return  redirect()->route("crud.read");
    }

    public function showRead(Request $request){

        $cruds=Crud::all();
    
        return view("crud.read",["cruds"=>$cruds]);
    }

    public function editPage($id){
       
      //  $data=DB::table('cruds')->where('id',$id)->first();
      $data=Crud::find($id);
    
   return view('crud.update', compact('data'));
    
    }

    public function updatePage(Request $request){
       
      /*
        $passwordSecure=Hash::make($request->password);

    $updating = DB::table('cruds')->where('id',$request->id)->update([
        "name"=>$request->input("name"),
        "email"=>$request->input("email"),
        "password"=>$passwordSecure,
        "detail"=>$request->input("detail"),  
        
]);
*/

$passwordSecure=Hash::make($request->password);
$id=$request->get('id');
$updating=Crud::find($id)->update([
    "name"=>$request->input("name"),
    "email"=>$request->input("email"),
    "password"=>$passwordSecure,
    "detail"=>$request->input("detail"),  
    
]);

return back();
    }

    /*delete view 
    public function deletePage(){
      return view('crud.delete');
    }
    */
   
    public function delete($id){
        Crud::find($id)->delete();
        return redirect()->back();
    }
}
