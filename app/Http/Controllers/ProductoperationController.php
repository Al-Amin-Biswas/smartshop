<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\AdminUsers;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductoperationController extends Controller
{
    public function create(){
        if(Session::has('adminsessionid')){
            $adminuser = AdminUsers::where('id', session::get('adminsessionid'))->first();
            $categoryitem= Category::latest()->paginate(7);
        }    
        return view('BackEndSection/productCategory', compact(['adminuser', 'categoryitem']));
    }
    public function store(Request $request){
        if(Session::has('adminsessionid')){
            $adminuser = AdminUsers::where('id', session::get('adminsessionid'))->first();
        }    
        $statuscode = 0;
        $validator = $request->validate([
            'catename'=>'required|string|min:5|max:55'
        ]);
        try{
            $category = new Category;
            $category->categoryname = $request->catename;
            $category->status = 1;  
            $category->createby = $adminuser->id; 
            $category->save();
            $contents= array("message"=>"Data Store Successfull");
            $statuscode=200;
    
        }catch(Exception $e){
                $contents= array("message"=>"Internal Server Error");
                $statuscode=500;
        }
        $reply = response($contents, $statuscode);
        return $reply;  

    }
    


    public function createSubCat(){
        if(Session::has('adminsessionid')){
            $adminuser = AdminUsers::where('id', session::get('adminsessionid'))->first();
            $scitem= SubCategory::latest()->paginate(7);
            $categorylist= Category::all();
            //dd($categorylist);
        }    
        return view('BackEndSection/productSubCategory', compact(['adminuser', 'scitem','categorylist']));
    }
    public function storeSubCat(Request $request){
        if(Session::has('adminsessionid')){
            $adminuser = AdminUsers::where('id', session::get('adminsessionid'))->first();
        }    
        $statuscode = 0;
        $validator = $request->validate([
            'subcname'=>'required|string|min:3|max:115',
            'catelist'=>'required'
        ]);
        try{
            $subcat = new SubCategory;
            $subcat->subcategoryname = $request->subcname;
            $subcat->category_id = $request->catelist;
            $subcat->status = 1;  
            $subcat->createby = $adminuser->id; 
            $subcat->updateby = $adminuser->id; 
            $subcat->save();
            $contents= array("message"=>"Data Store Successfull");
            $statuscode=200;
    
        }catch(Exception $e){
                $contents= array("message"=>"Internal Server Error");
                $statuscode=500;
        }
        $reply = response($contents, $statuscode);
        return $reply;  
    }


}
