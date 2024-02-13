<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\AdminUsers;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('adminsessionid')){
            $adminuser = AdminUsers::where('id', session::get('adminsessionid'))->first();
            $categoryitem= Category::all();
        }    
        return view('BackEndSection/product', compact(['adminuser', 'categoryitem']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        return $req->catid;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Session::has('adminsessionid')){
            $adminuser = AdminUsers::where('id', session::get('adminsessionid'))->first();
        }    
        $statuscode = 0;
        $validator = $request->validate([
            'pname'=>'required|string|min:3|max:55',
            'pprice'=>'required|string|min:5|max:55',
            'pcategory'=>'required',
            'pscategory'=>'required',
            'psku'=>'required|string|min:5|max:55',
            'pimage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdesc'=>'required'
            
        ]);
        try{
            $product = new Product;
            $product->product_name = $request->pname;
            $product->description = $request->pdesc;  
            $product->sku = $request->psku;
            $imageName = time().'.'.$request->pimage->extension();
            // Public Folder
             $request->pimage->move(public_path('images'), $imageName);
            // //Store in Storage Folder
            // $request->image->storeAs('images', $imageName);
            $product->price = $request->pprice;
            $product->status = 1;
            $product->hit_count = 1;
            $product->image = $request->catename;
            $product->category_id = $request->pname;  
            $product->subcategory_id = $request->pname;
            $product->inventory_id = $request->pname;
            $product->productsize_id = $request->catename;  
            $product->discount_id = $adminuser->id; 
            $product->createby = 1;  
            $product->updateby = $adminuser->id; 
            $product->save();

            $contents= array("message"=>"Data Store Successfull");
            $statuscode=200;
    
        }catch(Exception $e){
                $contents= array("message"=>"Internal Server Error");
                $statuscode=500;
        }
        $reply = response($contents, $statuscode);
        return $reply;  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
