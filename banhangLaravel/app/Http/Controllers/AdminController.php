<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Session\Store;
session_start();
class AdminController extends Controller
{
    //nếu tồn tại admin_id thi về dasboard ko thì về admin
    // để đầu môi hàm 
    function Authlogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect('/dashboard');
        }
        else
             return Redirect('/admin')->send();
    }
   	function index(){
    	return view('page_admin.login_admin');
    }
    function show_dashboard(){
    	$this->Authlogin();
        return view('page_admin.dashboard');
    }
    
     function admin_login(Request $request){
    	$admin_email = $request->admin_email;
    	$admin_password = md5($request->admin_password);
    
    	$result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

    	if($result)
    	{
    		Session::put('admin_name',$result->admin_name);
    		Session::put('admin_id',$result->admin_id);
    		return Redirect('/dashboard');
    	}
    	else
    	{
    		Session::put('errl','Tài khoản hoặc mật khẩu không chính xác!');
    		return Redirect('/admin');
    	}
    }

    function admin_logout(){
        $this->Authlogin();
    	Session::pull('admin_name');
    	Session::pull('admin_id');
    	return Redirect('/admin');
    }
}
