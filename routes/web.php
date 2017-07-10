<?php
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'bcf',
    'middleware' => ['admin'],
    'namespace' => 'BCF'],function (){

    Route::get('/',function (Request $request){
        if(getMember2ID()>0) return redirect('bcf/'.create_code_number(getMember2ID()));
        return redirect('admin/member');
    });

    Route::get('/back-home',function (Request $request){
        $request->session()->put('admin_member_id', 0);
        return redirect('admin/member');
    });

    Route::get('/{code}', function ($code,Request $request) {
        $member_id = getMemberID() > 0?getMemberID() : code_number_to_id($code);
        if($member_id >0) {
            $m = \App\Models\Member::find($member_id);
            if($m != null) {
                if(getUserID()>0) {
                    $request->session()->put('admin_member_id', $m->id);
                    //dd(getAdminMemberID());
                }
                return view('member.dashboard', ['code' => $code, 'member_id' => $member_id,'row'=>$m]);
            }
        }
        return '';
    });

    Route::get('/{code}/business-card', function ($code) {
        return view('member.business-card',['code'=>$code,'id'=>code_number_to_id($code)]);
    });

});

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('article', 'ArticleCrudController');

    CRUD::resource('business_category', 'Business_categoryCrudController');
    CRUD::resource('business_type', 'Business_typeCrudController');
    CRUD::resource('business_function', 'Business_functionCrudController');
    CRUD::resource('business_intermediary', 'Business_intermediaryCrudController');

    CRUD::resource('country', 'CountryCrudController');
    CRUD::resource('province', 'ProvinceCrudController');
    CRUD::resource('district', 'DistrictCrudController');
    CRUD::resource('commune', 'CommuneCrudController');
    CRUD::resource('village', 'VillageCrudController');

    CRUD::resource('mobile', 'MobileCrudController');
    CRUD::resource('telephone', 'TelephoneCrudController');
    CRUD::resource('social_media', 'Social_mediaCrudController');
    CRUD::resource('mobile_network', 'Mobile_networkCrudController');
    CRUD::resource('email_company', 'Email_companyCrudController');


    CRUD::resource('department', 'DepartmentCrudController');
    CRUD::resource('position', 'PositionCrudController');

    CRUD::resource('member', 'MemberCrudController');

});