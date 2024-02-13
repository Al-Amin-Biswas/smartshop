$validator = Validator::make($request->all(), [
  'name' => 'required|max:50',
  'email' => 'required|email|unique:AdminUsers',
  'password' => 'required|max:25|min:6',
  'cpassword' => 'required|same:password|min:6',

  
]);



if ($validator->fails()) {
  return response()->json([
      "message" => $validator->getMessageBag()
  ]);
              
}else{
  $adminreg = new AdminUsers;
$adminreg->name = $request->name;
$adminreg->email = $request->email;
$adminreg->password = $request->password;
$adminreg->save();
return response(['success' => 'Employee created successfully.']);
   //return response()->json(['data' =>$adminreg,'message' =>'Insert success']);
  //return response()->json($adminreg);
}