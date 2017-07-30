<?php

namespace App\Http\Controllers\BCF;

use App\Models\BCF\Company;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{

    function headOfficeBusinessDocumentUpload($code,Request $request)
    {
        $member_id = getMemberID() > 0?getMemberID() : code_number_to_id($code);
        if($member_id >0) {
            $m = Member::find($member_id);
            if($m != null) {
                if(getUserID()>0) {
                    $request->session()->put('admin_member_id', $m->id);
                }
                $row = Company::where('member_id',$m->id)->first();
                return view('member.head-office-business-document-upload', ['code' => $code, 'member_id' => $member_id,'row'=>$row]);
            }
        }
        return '';
    }

    function headOfficeBusinessDocumentUploadSave(Request $request)
    {
        $m = Company::headOfficeBusinessDocumentUploadSave($request);
        if($m != null)
        {
            return redirect()->back();
        }
    }

    function headOfficeBusinessCard($code,Request $request)
    {
        $member_id = getMemberID() > 0?getMemberID() : code_number_to_id($code);
        if($member_id >0) {
            $m = Member::find($member_id);
            if($m != null) {
                if(getUserID()>0) {
                    $request->session()->put('admin_member_id', $m->id);
                }
                $row = Company::where('member_id',$m->id)->first();
                return view('member.head-office-business-card', ['code' => $code, 'member_id' => $member_id,'row'=>$row]);
            }
        }
        return '';
    }

    function headOfficeBusinessCardSave(Request $request)
    {
        $m = Company::headOfficeBusinessCardSave($request);
        if($m != null)
        {
            return redirect()->back();
        }
    }



}
