<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AdminTask;
use App\Models\Task;

class apiController extends Controller
{

	//Get  To show all users
    public function showUser($id=null){
    	if($id==''){
    		$users=User::get();
    		return response()->json(['users'=>$users,200]);
    	}
    	else{
    		$users=User::find($id);
    		return response()->json(['users'=>$users,200]);
    	}

    }
    // Post to insert/add new user
    public function addUser(Request $req){
    	if($req->ismethod('post')){
    		$data=$req->all();

    		$user=new User();
    		$user->name=$data['name'];
    		$user->email=$data['email'];
    		$user->user_type=$data['user_type'];
    		$user->password=bcrypt($data['password']);

    		$user->save();
    		$message='User is added Successfully';
    		return response()->json(['message'=>$message],200);
    		

    	}
    }


}
