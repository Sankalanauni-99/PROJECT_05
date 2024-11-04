<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Arena;

class AdminController extends Controller
{
    public function all_users(){
        
        $allusers = User::select('id', 'name', 'email')
                        ->where('usertype', 0)
                        ->get();
        
        return view('Admin.all_users', compact('allusers'));
    }

    public function deleteUsers($id){
        try{
            User::where('id',$id)->delete();
            return redirect('/all_users')->with('success','User Deleted Successfully');
        } catch (\Exception $e) {
            return redirect('/all_users')->with('fail',$e->getMessage());
        }   
    }

    public function all_arenas(){
        
        $allarenas = Arena::select('id', 'arena_name', 'location','contact')
                        ->get();
        
        return view('Admin.all_arenas', compact('allarenas'));
    }

    public function deleteArenas($id){
        try{
            Arena::where('id',$id)->delete();
            return redirect('/all_arenas')->with('success','Arena Deleted Successfully');
        } catch (\Exception $e) {
            return redirect('/all_arenas')->with('fail',$e->getMessage());
        }   
    }
}
