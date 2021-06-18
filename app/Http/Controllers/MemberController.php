<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    function data_show(){
        // $data['memberlist'] = Member::all(); get all data 
        $data['memberlist'] = Member::paginate(10);
        
        return view("list",$data);
    }
}
