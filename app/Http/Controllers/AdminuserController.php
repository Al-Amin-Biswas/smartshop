<?php

namespace App\Http\Controllers;
use App\Models\AdminUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
class AdminuserController extends Controller
{
    public function create(){
        return view('BackEndSection/signin');
    }
    public function store(Request $request){
                // $success=false;
                //return $request->all();
                $validator = $request->validate([
                    'name'=>'required|string|min:5|max:55',
                    'email'=>'required|email|unique:admin_users',
                    'password'=>'required||confirmed|min:6',
                    'password_confirmation' => 'required',
                ]);
                try{
                    $adminreg = new AdminUsers;
                    $adminreg->name = $request->name;
                    $adminreg->email = $request->email;
                    $adminreg->password = Hash::make($request->password);
                    $adminreg->save();
                    $contents= array("message"=>"Data Store Successfull");
                    $statuscode=200;
                
                }catch(Exception $e){
                    $contents= array("message"=>"Internal Server Error");
                    $statuscode=500;
                    }
                $replay=response($contents,$statuscode);
                return $replay;
        
        // if ($validator->fails()) {
        //     $contents= array("message"=>$validator->errors());
        //     $statuscode=400;
        // }else{
        //     $item=$request->input();
        //     if($statuscode!=400){
        //         $category = new Category;
        //             $category->categoryname = $request->catename;
        //             $category->status = 1;  
        //             try{
        //                 $category->save();
        //                 $contents= array("message"=>"Data Store Successfull");
        //                 $statuscode=200;

        //             }catch(Exception $e){
        //                 $contents= array("message"=>"Internal Server Error");
        //                 $statuscode=500;
        //             }
        //     }else{
        //         $contents= array("message"=>"Something Went Wrong");
        //         $statuscode=502;
        //     }
        //     return 1;
            
            // $reply = response($contents, $statuscode);
            // return $reply;   
            
            
            // return response()->json([
            //     'success'=>false,
            //     'errors'=>($validator->getMessageBag()->toArray()),
            // ],400);
        // }
    }

    public function adminlogin(Request $request){
        $validator = $request->validate([
            'loginemail'=>'required|email',
            'loginpassword'=>'required|min:6',
        ]);
        // return $request->all();
        $checkadmin = AdminUsers::where('email', $request->loginemail)->where('role', 1)->first();
        // return $checkadmin;
        if($checkadmin){
            if(Hash::check($request->loginpassword, $checkadmin->password)){
                $request->session()->put('adminsessionid', $checkadmin->id);
                return response()->json([
                    "statuscode" => true, 
                    "adminId"=>$checkadmin->id,
                    "redirect" => url("dashboard")
                ]);
            }else{
                $contents= array("message"=>"Email Or Password is incorrect");
                $statuscode=500;
                // return back()->with("dontmatch", "You Password is incorrect");
            }
        }
    }
    public function AuthSignIN(){
        if(Session::has('adminsessionid')){
        $adminuser = AdminUsers::where('id', session::get('adminsessionid'))->first();
        }
        // return view('BackEnd/dashboard', compact('data'));
        return view('BackEndSection/dashboard', compact('adminuser'));
    }
    public function AuthLogout(){
        if(Session::has('adminsessionid')){
            Session::pull('adminsessionid');
            Return redirect('admin-login');
        }
    }
    

    
}
