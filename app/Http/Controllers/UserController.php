<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Task;

class UserController extends Controller
{
    public function add_task_view(){
        if(Auth::id()){
            if(Auth::user()->user_type==0){

                return view('user.addTask');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    	
    }
    public function upload_Task(Request $req){
    	$Task=new Task;
    	
    	$Task->name=$req->name;
    	$Task->desc=$req->desc;
    	$Task->user_id=Auth::user()->id;

    	$Task->save();

    	return redirect()->back()->with('message','Successfully Added Task.');
    }
    public function showTask(){
       
        if(Auth::id()){
            if(Auth::user()->user_type==0){
            	$userId=Auth::user()->id;
            	$data=task::where('user_id',$userId)->get();

                return view('user.showTask',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
        
        
    }
    public function updateTask(Request $req, $id){
        $upData=Task::find($id);
        if(Auth::id()){
            if(Auth::user()->user_type==0){

                return view('user.updateTask',compact('upData'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }

        

    }
    public function editTask(Request $req,$id){
        $edData=Task::find($id);

        $edData->name=$req->name;
        $edData->desc=$req->desc;
       
        $edData->save();

        return redirect()->back()->with('message','Updated Successfully!');

    }
    public function deleteTask($id){
        $dltData=Task::find($id);
        $dltData->delete();

        return redirect()->back();
    }
}
