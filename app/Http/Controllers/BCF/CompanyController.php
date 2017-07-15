<?php

namespace App\Http\Controllers\BCF;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{

    function headOfficeBusinessCard($code,Request $request)
    {
        $member_id = getMemberID() > 0?getMemberID() : code_number_to_id($code);
        if($member_id >0) {
            $m = Member::find($member_id);
            if($m != null) {
                if(getUserID()>0) {
                    $request->session()->put('admin_member_id', $m->id);
                }
                return view('member.head-office-business-card', ['code' => $code, 'member_id' => $member_id,'row'=>$m]);
            }
        }
        return '';
    }

    function headOfficeBusinessCardSave(Request $request)
    {
        dd($request);
    }



}
