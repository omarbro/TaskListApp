<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AdminTask;
use App\Models\Task;

class AdminController extends Controller
{
    public function add_task_view(){
        if(Auth::id()){
            if(Auth::user()->user_type==1){

                return view('admin.addTask');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    	
    }
    public function upload_adminTask(Request $req){
    	$adminTask=new adminTask;
    	
    	$adminTask->name=$req->name;
    	$adminTask->desc=$req->desc;
        $adminTask->user_id=Auth::user()->id;

    	$adminTask->save();

    	return redirect()->back()->with('message','Successfully Added Task.');
    }
    public function showAdTask(){
        
        if(Auth::id()){
            if(Auth::user()->user_type==1){
                $userId=Auth::user()->id;
                $data=adminTask::where('user_id',$userId)->get();

                return view('admin.showTasks',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
        
        
    }
    public function updateAdTask(Request $req, $id){
        $upData=adminTask::find($id);
        if(Auth::id()){
            if(Auth::user()->user_type==1){

                return view('admin.updateTask',compact('upData'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }

        

    }
    public function editAdTask(Request $req,$id){
        $edData=adminTask::find($id);

        $edData->name=$req->name;
        $edData->desc=$req->desc;
       
        $edData->save();

        return redirect()->back()->with('message','Updated Successfully!');

    }
    public function deleteAdTask($id){
        $dltData=adminTask::find($id);
        $dltData->delete();

        return redirect()->back();
    }

    //User Data Manage

    public function userTasks(){
        $data=task::all();
        if(Auth::id()){
            if(Auth::user()->user_type==1){

                return view('admin.manageUserTask',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }

       
    }
        
        

    public function updateUserTask($id){
        $upUData=task::find($id);
        if(Auth::id()){
            if(Auth::user()->user_type==1){
                
                 return view('admin.upUserTaskView',compact('upUData'));
            }
            else{
                 return redirect()->back();
                
            }
        }
        else{
            return redirect('login');
        }
    }
        

    
    public function editUserTask(Request $req,$id){
        $edData=task::find($id);

        $edData->name=$req->name;
        $edData->desc=$req->desc;
       
        $edData->save();

        return redirect()->back()->with('message','Updated Successfully!');

    }
    public function deleteUserTask($id){
        $dltData=task::find($id);
        $dltData->delete();

        return redirect()->back();
    }
}
