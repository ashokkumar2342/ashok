<?php

namespace App\Http\Controllers\API;
use App\User;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;

class PassportController extends Controller
{
   public $successStatus = 200;

   // public function login(){
	  //  	if(Auth::attempt(['email']=>request('email'),'password'=>request('password'))){
	  //  		$user = Auth::user();
	  //  		$success['token'] = $user->createToken('MyApp')->accessToken;
	  //  		return response()->json(['success'=>$sucess], $this->successStatus);   	
	  //   }else{
	  //  		return response()->json('error'=>'Unauthorized', 401);
	  //  		}

   // 	}
   public function register(Request $request){

   		// dd($request->all());
   		$validator = Validator::make($request->all(),[
   			'name' => 'required',
   			// 'email' => 'required|email',
   			// 'password' => 'required',
   			// 'c_password' => 'required|same:password',

   			]);
   		if($validator->fails()){
   			return response()->json(['error'=>$validator->errors()], 401);
   		}

   		$data = new Blog();

   		$data->name=$request->name;
   		// $data->save() ;
   		if($data->save()){
   			return response()->json(['response'=>'OK']);
   		}else {
   			return response()->json(['response'=>'FALSE']);
   		}

   	
   		

   		// $input = $request->all();
   		// $input['password'] = bcypt($input['pasword']);
   		// $user = User::create($input);
   		// $success['token'] = $user->createToken('MyApp')->accessToken;
   		// $sucess['name'] = $user->name;
   		// return response()->json(['success'=>$success], $this->cuccessStatus);
   	}
   	
   // public function getDetails(){
   // 	$user = Auth::user();
   // 	return response()->json(['success'=>$user], $this->successStatus);
   // }
}
