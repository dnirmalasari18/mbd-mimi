<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    //
    public function memberIndex(){
    	$member=Member::all();
    	return view('member.index')->with('member',$member);
    }
}
