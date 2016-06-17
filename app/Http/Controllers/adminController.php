<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\news;
use App\User;
use Auth;



class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminpeople()
    {  
        $user = User::all() ;

        $data=['tasks'=>$user]; 

        return view('adminpeople', $data);
    }

    public function admin(){

      

        return view('admin');
    }

    public function EditMemberdata(Request $request , $id){

        $this -> validate($request , [
            'name'          =>  'required',
            'chineseName'   =>  'required',
            'nickname'      =>  'required',
            'Jobtitle'      =>  'required',
            'introduce'     =>  'max:255',
            'email'         =>  'email|required',
        ]);


        $data=[
            'name'          => $request -> name,
            'chineseName'   => $request -> chineseName,
            'nickname'      => $request -> nickname,
            'Jobtitle'      => $request -> Jobtitle,
            'introduce'     => $request -> introduce,
            'facebook'      => $request -> facebook,
            'google'        => $request -> google,
            'twitter'       => $request -> twitter,
            'email'         => $request -> email,
        ];

        User::where('id', $id)
            ->update($data);
        return redirect('admin/people');
        // dd($data);

    }





}
