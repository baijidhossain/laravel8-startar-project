<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\Controller;
use App\Model\Role;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Menu;
use App\Model\Page;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        Gate::authorize('app.dashboard');
        $data['alluser']=User::all();
        $data['admincount']=User::where('name','Admin')->get();
        $data['rolecount']=Role::all();
        $data['menucount']=Menu::count();
        $data['users']=User::orderBy('created_at','desc')->get();
        // $data['users']=User::orderBy('created_at','desc')->take(3)->get();
   
        
        
        return view('backend.dashboard',$data);
    }
}
