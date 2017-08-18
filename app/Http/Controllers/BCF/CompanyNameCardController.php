<?php

namespace App\Http\Controllers\BCF;

use App\Models\BCF\Company;
use App\Models\BCF\CompanyNameCard;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyNameCardController extends Controller
{
    var $company_id;

    function __construct()
    {
        $this->company_id = session('company_id');
    }

    function index($code,Request $request)
    {

        $member_id = getMemberID() > 0?getMemberID() : code_number_to_id($code);
        if($member_id >0) {
            $m = Member::find($member_id);
            if($m != null) {
                if(getUserID()>0) {
                    $request->session()->put('admin_member_id', $m->id);
                }

                $rows = CompanyNameCard::where('member_id', getMember2ID())
                    //->where('company_id',$this->company_id)
                    ->paginate(20);


                return view('member.company.company-name-card.index',['rows'=>$rows]);

            }
        }
        return '';


    }

    function form($code,Request $request)
    {
        $member_id = getMemberID() > 0?getMemberID() : code_number_to_id($code);
        if($member_id >0) {
            $m = Member::find($member_id);
            if($m != null) {
                if(getUserID()>0) {
                    $request->session()->put('admin_member_id', $m->id);
                }

                $id = $request->id;

                $row = null;

                if($id > 0)
                {
                    $row = CompanyNameCard::find($id);
                }

                return view('member.company.company-name-card.form',['row'=>$row]);

            }
        }
        return '';


    }

    function save(Request $request)
    {
        $this->validate($request,[
            'given_name' => 'required',
        ]);


        $m = CompanyNameCard::saveData($request);
        if($m != null)
        {
            return redirect('bcf/'.create_code_number($m->member_id).'/head-office-business-card-list');
        }else{
            return redirect()->back();
        }


    }

    function delete(Request $request)
    {
        $member_id =  getMember2ID();

        if($member_id > 0) {

            $id = $request->id;
            $m = CompanyNameCard::where('member_id', $member_id)->where('id',$id)->first() ;

            if($m != null)
            {
                $m->delete();
            }

        }

        return redirect()->back();


    }

}
