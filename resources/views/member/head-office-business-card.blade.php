<?php
$id = isset($row->id)?$row->id:0;
$official_name = isset($row->official_name)?$row->official_name:'';
$business_type_json = isset($row->business_type_json)?json_decode($row->business_type_json):[];

$country_id = isset($row->country_id)?$row->country_id:'';
$province_id = isset($row->province_id)?$row->province_id:'';
$district_id = isset($row->district_id)?$row->district_id:'';
$commune_id = isset($row->district_id)?$row->commune_id:'';
$address = isset($row->address)?$row->address:'';

$fax = isset($row->fax)?$row->fax:'';
$website = isset($row->website)?$row->website:'';

$mobile_number = isset($row->mobile_number)?json_decode($row->mobile_number,true):[];
$telephone_number = isset($row->telephone_number)?json_decode($row->telephone_number,true):[];
$email = isset($row->email)?json_decode($row->email,true):[];
$social_media = isset($row->social_media)?json_decode($row->social_media,true):[];
$mobile_network = isset($row->mobile_network)?json_decode($row->mobile_network,true):[];
$working_hours = isset($row->working_hours)?json_decode($row->working_hours,true):[];

?>
@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            HO BC Register Form
            {{--<small>{{ trans('backpack::base.first_page_you_see') }}</small>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url("bcf/") }}">User Account</a></li>
            <li class="active">Head Office Business Card</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $id }}">
                <div class="box">
                    {{--<div class="box-header">
                        <h3 class="box-title">HEAD OFFICE BUSINESS CARD REGISTRATION FORM</h3>
                    </div>--}}
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed tbl-p">
                            <tr>
                                <td colspan="3">GBCF CODE AND OFFICIAL BUSINESS NAME</td>
                            </tr>
                            <tr>
                                <td>{{ $code }}</td>
                                <td colspan="2">
                                    <input value="{{ $official_name }}" name="official_name" id="official_name" class="form-control official_name">
                                </td>
                            </tr>

                            @if(count($business_type_json) > 0)
                                @foreach($business_type_json as $bs)
                                    @php
                                       $t = getRND();
                                       $c = getRND();
                                       $business_category_id = $bs->business_category_id;
                                       $m_category = \App\Models\Business_category::find($business_category_id);
                                    @endphp
                                    <tbody data-c="{{ $c }}" data-t="{{ $t }}" class="category">
                                        <tr class="tr-category">
                                            <td style="width: 200px">BUSINESS CATEGORY <span style="color: red;">*</span>
                                            </td>
                                            <td>
                                                <select name="business_type_json[{{ $c }}][business_category_id]"
                                                        data-multiple="0" data-url="{{ url('api/bcf-category') }}"
                                                        class="form-control select2_ajax_multiple business_category_id"
                                                        data-placeholder="SELECT BUSINESS CATEGORY"
                                                        style="width: 100%">
                                                    @if($m_category != null)
                                                        <option selected value="{{ $m_category->id }}">{{ $m_category->title }}</option>
                                                    @endif
                                                </select>
                                            </td>
                                            <td style="width: 40px !important;">
                                                <a href="#" class="btn btn-xs btn-default add-b-category"><i class="fa fa-edit"></i> Add</a>
                                            </td>
                                        </tr>

                                        @foreach($bs->business_type_id as $tb)
                                        <tr>
                                            @php
                                                $t = getRND();
                                                $business_type_id = $tb->bt;
                                                $m_type = \App\Models\Business_type::find($business_type_id);
                                            @endphp
                                            <td colspan="3" style="border: 1px solid #0081ff;margin-top: 5px; ">
                                                <table class="table" style="width: 100%;margin-top: 5px; ">
                                                    <tbody class="category-type" style="border: 1px solid #09c0ff;">
                                                        <tr class="tr-type">
                                                            <td style="width: 200px;border-top:1px solid #09c0ff;">BUSINESS TYPE
                                                                <span style="color: red;">*</span></td>
                                                            <td style="border-top:1px solid #09c0ff;">
                                                                <select name="business_type_json[{{ $c }}][business_type_id][{{ $t }}][bt]"
                                                                        data-category="" data-multiple="0"
                                                                        data-url="{{ url('api/bcf-category-type') }}"
                                                                        class="form-control select2_ajax_multiple business-type"
                                                                        data-placeholder="SELECT BUSINESS TYPE"
                                                                        style="width: 100%">
                                                                    <option selected value="{{ $m_type->id }}">{{ $m_type->title }}</option>
                                                                </select>
                                                            </td>
                                                            <td style="width: 40px;border-top:1px solid #09c0ff;"><a href="#" class="btn btn-xs btn-default  add-b-type"><i class="fa fa-edit"></i> Add</a></td>
                                                        </tr>
                                                        @php
                                                            $business_function_id = $tb->business_function_id;
                                                            $m_function = \App\Models\Business_function::whereIn('id',$business_function_id)->get();
                                                        @endphp
                                                        <tr class="tr-function">
                                                            <td style="width: 200px">Business Function <span
                                                                        style="color: red;">*</span></td>
                                                            <td>
                                                                <select name="business_type_json[{{ $c }}][business_type_id][{{ $t }}][business_function_id][]"
                                                                        data-multiple="1"
                                                                        data-url="{{ url('api/bcf-function') }}"
                                                                        class="form-control select2_ajax_multiple business-function"
                                                                        data-placeholder="SELECT BUSINESS Function"
                                                                        style="width: 100%;visibility: hidden;" multiple>
                                                                    @if(count($m_function)>0)
                                                                        @foreach($m_function as $r_f)
                                                                            <option selected value="{{ $r_f->id }}">{{ $r_f->title }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </td>
                                                            <td style="width: 40px"></td>
                                                        </tr>
                                                        @php
                                                            $business_intermediary_id = $tb->business_intermediary_id;
                                                            $m_int = \App\Models\Business_intermediary::whereIn('id',$business_intermediary_id)->get();
                                                        @endphp

                                                        <tr class="tr-intermediary">
                                                        <td style="width: 200px">Channel Intermediary <span
                                                                    style="color: red;">*</span></td>
                                                        <td>
                                                            <select name="business_type_json[{{ $c }}][business_type_id][{{ $t }}][business_intermediary_id][]"
                                                                    data-multiple="1"
                                                                    data-url="{{ url('api/bcf-intermediary') }}"
                                                                    class="form-control select2_ajax_multiple channel-intermediary"
                                                                    data-placeholder="SELECT BUSINESS Function"
                                                                    style="width: 100%;visibility: hidden;" multiple>
                                                                @if(count($m_int)>0)
                                                                    @foreach($m_int as $r_i)
                                                                        <option selected value="{{ $r_i->id }}">{{ $r_i->title }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </td>
                                                        <td style="width: 40px"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                        <table class="table">
                            <tr><td colspan="3">BUSINESS ADDRESS</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">

                                        <tr>
                                            <td style="width: 200px;">Country <span style="color: red;">*</span></td>
                                            <td colspan="2">
                                                @php
                                                    $country = \App\Models\Country::find($country_id);
                                                @endphp
                                                <select name="country_id"
                                                        data-multiple="0" data-url="{{ url('api/bcf-get-address') }}"
                                                        class="form-control select2_ajax_multiple country"
                                                        data-placeholder="Country"
                                                        style="width: 100%" required>
                                                    @if($country != null)
                                                    <option value="{{ $country->id }}">{{ $country->title }}</option>
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
{{--

                                        <tr>
                                            <td style="width: 200px;">Region <span style="color: red;">*</span></td>
                                            <td colspan="2">
                                                <select name="region"
                                                        data-multiple="0" data-url="{{ url('api/bcf-get-address') }}"
                                                        class="form-control select2_ajax_multiple region"
                                                        data-placeholder="Region"
                                                        style="width: 100%">

                                                    <option value=""></option>
                                                </select>
                                            </td>
                                        </tr>
--}}

                                        <tr>
                                            <td style="width: 200px;">Province <span style="color: red;">*</span></td>
                                            <td colspan="2">
                                                @php
                                                    $province = \App\Models\Province::where('country_id',$country_id)->where('id',$province_id)->first();
                                                @endphp
                                                <select name="province_id"
                                                        data-multiple="0" data-url="{{ url('api/bcf-get-address') }}"
                                                        class="form-control select2_ajax_multiple province"
                                                        data-placeholder="Province"
                                                        style="width: 100%" required>

                                                    @if($province != null)
                                                        <option value="{{ $province->id }}">{{ $province->title }}</option>
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px;">District <span style="color: red;">*</span></td>
                                            <td colspan="2">
                                                @php
                                                    $district = \App\Models\District::where('province_id',$province_id)->where('id',$district_id)->first();
                                                @endphp
                                                <select name="district_id"
                                                        data-multiple="0" data-url="{{ url('api/bcf-get-address') }}"
                                                        class="form-control select2_ajax_multiple district"
                                                        data-placeholder="District"
                                                        style="width: 100%" required>
                                                    @if($district != null)
                                                        <option value="{{ $district->id }}">{{ $district->title }}</option>
                                                    @endif

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px;">Commune <span style="color: red;">*</span></td>
                                            <td colspan="2">
                                                @php
                                                    $commune = \App\Models\Commune::where('district_id',$district_id)->where('id',$commune_id)->first();
                                                @endphp
                                                <select name="commune_id"
                                                        data-multiple="0" data-url="{{ url('api/bcf-get-address') }}"
                                                        class="form-control select2_ajax_multiple commune"
                                                        data-placeholder="Commune"
                                                        style="width: 100%" required>
                                                    @if($commune != null)
                                                        <option value="{{ $commune->id }}">{{ $commune->title }}</option>
                                                    @endif

                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 200px;">Business Address <span style="color: red;">*</span></td>
                                            <td colspan="2">
                                                <textarea name="address"  class="form-control address" required>{{ $address }}</textarea>
                                            </td>
                                        </tr>


                                    </table>

                                </td>

                            </tr>


                            <tr><td colspan="3">MOBILE PHONE CONTACT</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        @php
                                             $mobile = \App\Models\Mobile::all();
                                        @endphp

                                        @if(count($mobile)>0)
                                            @foreach($mobile as $row)
                                                <tr>
                                                    <td style="width: 200px;">{{ $row->company_name }}</td>
                                                    <td colspan="2">
                                                        <input type="hidden" name="mobile_number[{{ $row->id }}][id]" value="{{ $row->id }}">
                                                        <input type="hidden" name="mobile_number[{{ $row->id }}][key]" value="{{ $row->company_name }}">
                                                        <input class="form-control" type="text" name="mobile_number[{{ $row->id }}][value]" value="{{ isset($mobile_number[$row->id]['value'])?$mobile_number[$row->id]['value']:'' }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </table>
                                </td>
                            </tr>

                            <tr><td colspan="3">TELEPHONE CONTACT</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        @php
                                            $telephone = \App\Models\Telephone::all();
                                        @endphp
                                        @if(count($telephone)>0)
                                            @foreach($telephone as $row)
                                                <tr>
                                                    <td style="width: 200px;">{{ $row->company_name }}</td>
                                                    <td colspan="2">
                                                        <input type="hidden" name="telephone_number[{{ $row->id }}][id]" value="{{ $row->id }}">
                                                        <input type="hidden" name="telephone_number[{{ $row->id }}][key]" value="{{ $row->company_name }}">
                                                        <input class="form-control" type="text" name="telephone_number[{{ $row->id }}][value]" value="{{ isset($telephone_number[$row->id]['value'])?$telephone_number[$row->id]['value']:'' }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </table>
                                </td>
                            </tr>
                            <tr><td colspan="3">FAX CONTACT</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        <tr>
                                            <td style="width: 200px;">Fax</td>
                                            <td colspan="2">
                                                <input class="form-control" type="text" name="fax" value="{{ $fax }}">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr><td colspan="3">E-MAIL CONTACT</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        @php
                                            $email_company = \App\Models\Email_company::all();
                                        @endphp
                                        @if(count($email_company)>0)
                                            @foreach($email_company as $row)
                                                <tr>
                                                    <td style="width: 200px;">{{ $row->company_name }}</td>
                                                    <td colspan="2">
                                                        <input type="hidden" name="email[{{ $row->id }}][id]" value="{{ $row->id }}">
                                                        <input type="hidden" name="email[{{ $row->id }}][key]" value="{{ $row->company_name }}">
                                                        <input class="form-control" type="text" name="email[{{ $row->id }}][value]" value="{{ isset($email[$row->id]['value'])?$email[$row->id]['value']:'' }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </table>
                                </td>
                            </tr>
                            <tr><td colspan="3">WEBSITE</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        <tr>
                                            <td style="width: 200px;">Web</td>
                                            <td colspan="2">

                                                <input class="form-control" type="text" name="website" value="{{ $website }}">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr><td colspan="3">SOCIAL MEDIA</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        @php
                                            $social_media_company = \App\Models\Social_media::all();
                                        @endphp
                                        @if(count($social_media_company)>0)
                                            @foreach($social_media_company as $row)
                                                <tr>
                                                    <td style="width: 200px;">{{ $row->company_name }}</td>
                                                    <td colspan="2">
                                                        <input type="hidden" name="social_media[{{ $row->id }}][id]" value="{{ $row->id }}">
                                                        <input type="hidden" name="social_media[{{ $row->id }}][key]" value="{{ $row->company_name }}">
                                                        <input class="form-control" type="text" name="social_media[{{ $row->id }}][value]" value="{{ isset($social_media[$row->id]['value'])?$social_media[$row->id]['value']:'' }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </table>
                                </td>
                            </tr>

                            <tr><td colspan="3">MOBILE NETWORK</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        @php
                                            $mobile_network_company = \App\Models\Mobile_network::all();
                                        @endphp
                                        @if(count($mobile_network_company)>0)
                                            @foreach($mobile_network_company as $row)
                                                <tr>
                                                    <td style="width: 200px;">{{ $row->company_name }}</td>
                                                    <td colspan="2">
                                                        <input type="hidden" name="mobile_network[{{ $row->id }}][id]" value="{{ $row->id }}">
                                                        <input type="hidden" name="mobile_network[{{ $row->id }}][key]" value="{{ $row->company_name }}">
                                                        <input class="form-control" type="text" name="mobile_network[{{ $row->id }}][value]" value="{{ isset($mobile_network[$row->id]['value'])?$mobile_network[$row->id]['value']:'' }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </table>
                                </td>
                            </tr>
                            <tr><td colspan="3">BUISNESS HOUR</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        @php
                                            $days_of_week = array(
                                                        'Monday',
                                                        'Tuesday',
                                                        'Wednesday',
                                                        'Thursday',
                                                        'Friday',
                                                        'Saturday',
                                                        'Sunday'
                                                    );
                                        @endphp

                                        @foreach($days_of_week as $k=>$v)
                                            <tr>
                                                <td style="width: 200px;">{{ $v }}</td>
                                                <td colspan="2">
                                                    <input type="hidden" name="working_hours[{{ $k }}][key]" value="{{ $v }}">
                                                    <input class="form-control" type="text" name="working_hours[{{ $k }}][value]" value="{{ isset($working_hours[$k]['value'])?$working_hours[$k]['value']:'' }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>


                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="box-footer">

                <div id="saveActions" class="form-group">

                    <div class="btn-group">

                        <button type="submit" class="btn btn-success">
                            <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                            <span data-value="save_and_back">Save and back</span>
                        </button>

                    </div>

                    <a href="{{ url("bcf/{$code}") }}" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;Cancel</a>
                </div>
                </div><!-- /.box-footer-->
            </form>

        </div>
    </div>
@endsection

{{-- FIELD CSS - will be loaded in the after_styles section --}}
@section('after_styles')
    @parent
<!-- include select2 css-->
<link href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection



<!-- include field specific select2 js-->
@section('after_scripts')
    @parent

    <!-- include select2 js-->
    <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
<script>

    function getCHtml(c,t) {

        var html = '<tbody data-c="'+c+'" data-t="'+t+'" class="category">' +
            '<tr class="tr-category">' +
            '<td  style="width: 200px">BUSINESS CATEGORY <span style="color: red;">*</span></td>' +
            '<td>' +
            '<select name="business_type_json['+c+'][business_category_id]" data-multiple="0" data-url="{{ url('api/bcf-category') }}" class="form-control select2_ajax_multiple business_category_id" data-placeholder="SELECT BUSINESS CATEGORY" style="width: 100%"></select>' +
            '</td>' +
            '<td  style="width: 40px !important;"><a href="#" class="btn btn-xs btn-default add-b-category"><i class="fa fa-edit"></i> Add</a></td>' +
            '</tr>' +
            '<tr>' +
            '<td colspan="3" style="border: 1px solid #0081ff;margin-top: 5px; ">' +
            '<table class="table" style="width: 100%;margin-top: 5px; ">' +
            '<tbody class="category-type" style="border: 1px solid #09c0ff;">' +
            '<tr class="tr-type">' +
            '<td  style="width: 200px;border-top:1px solid #09c0ff;">BUSINESS TYPE <span style="color: red;">*</span></td>' +
            '<td style="border-top:1px solid #09c0ff;">' +
            '<select name="business_type_json['+c+'][business_type_id]['+t+'][bt]" data-category="" data-multiple="0" data-url="{{ url('api/bcf-category-type') }}"  class="form-control select2_ajax_multiple business-type"  data-placeholder="SELECT BUSINESS TYPE" style="width: 100%"></select>' +
            '</td>' +
            '<td  style="width: 40px;border-top:1px solid #09c0ff;"><a href="#" class="btn btn-xs btn-default  add-b-type"><i class="fa fa-edit"></i> Add</a></td>' +
            '</tr>' +
            '<tr class="tr-function">' +
            '<td  style="width: 200px">Business Function <span style="color: red;">*</span></td>' +
            '<td>' +
            '<select multiple name="business_type_json['+c+'][business_type_id]['+t+'][business_function_id][]" data-multiple="1" data-url="{{ url('api/bcf-function') }}"  class="form-control select2_ajax_multiple business-function"  data-placeholder="SELECT BUSINESS Function" style="width: 100%;visibility: hidden;"></select>' +
            '</td>' +
            '<td  style="width: 40px"></td>' +
            '</tr>' +
            '<tr class="tr-intermediary">' +
            '<td  style="width: 200px">Channel Intermediary <span style="color: red;">*</span></td>' +
            '<td>' +
            '<select multiple name="business_type_json['+c+'][business_type_id]['+t+'][business_intermediary_id][]"  data-multiple="1" data-url="{{ url('api/bcf-intermediary') }}"  class="form-control select2_ajax_multiple channel-intermediary"   data-placeholder="SELECT BUSINESS Function" style="width: 100%;visibility: hidden;"></select>' +
            '</td>' +
            '<td  style="width: 40px"></td>' +
            '</tr>' +
            '</tbody>' +
            '</table>' +
            '</td>' +
            '</tr>' +
            '</tbody>';//

        $('.tbl-p').append(html);

        runSelect2($('.business_category_id'));

    }

    function getTHtml(p,c,t) {
        var html = '<tr>' +
            '<td colspan="3" style="border: 1px solid #0081ff;margin-top: 5px; ">' +
            '<table class="table" style="width: 100%;margin-top: 5px; ">' +
            '<tbody class="category-type" style="border: 1px solid #09c0ff;">' +
            '<tr class="tr-type">' +
            '<td style="width: 200px;border-top:1px solid #09c0ff;">BUSINESS TYPE <span style="color: red;">*</span></td>' +
            '<td style="border-top:1px solid #09c0ff;">' +
            '<select name="business_type_json['+ c +'][business_type_id]['+ t +'][bt]" data-category="" data-multiple="0" data-url="{{ url('api/bcf-category-type') }}" class="form-control select2_ajax_multiple business-type" data-placeholder="SELECT BUSINESS TYPE" style="width: 100%">' +
            '</select>' +
            '</td>' +
            '<td style="width: 40px;border-top:1px solid #09c0ff;"><a href="#" class="btn btn-xs btn-default add-b-type"><i class="fa fa-edit "></i> Add</a></td>' +
            '</tr>' +
            '<tr class="tr-function">' +
            '<td style="width: 200px">Business Function <span style="color: red;">*</span></td><td>' +
            '<select multiple name="business_type_json['+ c +'][business_type_id]['+ t +'][business_function_id][]" data-multiple="1" data-url="{{ url('api/bcf-function') }}" class="form-control select2_ajax_multiple business-function" data-placeholder="SELECT BUSINESS Function" style="width: 100%;visibility: hidden;">' +
            '</select>' +
            '</td>' +
            '<td style="width: 40px"></td>' +
            '</tr>' +
            '<tr class="tr-intermediary">' +
            '<td style="width: 200px">Channel Intermediary <span style="color: red;">*</span></td>' +
            '<td>' +
            '<select multiple name="business_type_json['+ c +'][business_type_id]['+ t +'][business_intermediary_id][]" data-multiple="1" data-url="{{ url('api/bcf-intermediary') }}" class="form-control select2_ajax_multiple channel-intermediary" data-placeholder="SELECT BUSINESS Function" style="width: 100%;visibility: hidden;">' +
            '</select>' +
            '</td>' +
            '<td style="width: 40px"></td>' +
            '</tr>' +
            '</tbody>' +
            '</table>' +
            '</td>' +
            '</tr>';

        p.append(html);

    }

    jQuery(document).ready(function() {

        runSelect2address($('.country'),'','country');
        @if($id > 0)
        runSelect2address($('.province'),$('.country').val(),'province');
        runSelect2address($('.district'),$('.province'),'district');
        runSelect2address($('.commune'),$('.district'),'commune');
        @endif

        $('body').delegate('.country','change',function (e) {
            var  country = $(this).val();

            $('.province').html('<option value=""></option>');
            $('.district').html('<option value=""></option>');
            $('.commune').html('<option value=""></option>');

            runSelect2address($('.province'),country,'province');
        });

        $('body').delegate('.province','change',function (e) {
            var  province = $(this).val();

            $('.district').html('<option value=""></option>');
            $('.commune').html('<option value=""></option>');

            runSelect2address($('.district'),province,'district');
        });


        $('body').delegate('.district','change',function (e) {
            var  district = $(this).val();

            $('.commune').html('<option value=""></option>');
            runSelect2address($('.commune'),district,'commune');
        });





        @if(count($business_type_json) > 0)
            $('.business_category_id').each(function () {
                runSelect2($(this));

                //=========================
                var  id = $(this).val();
                var p = $(this).parent().parent().parent();
                var bt = p.find('.business-type');
                bt.data('category',id);
                runSelect2(bt);
                runSelect2(p.find('.channel-intermediary'));
                runSelect2(p.find('.business-function'));
                //==========================
            });
        @else
            var c  = (new Date().getTime());
            var t  = c+100;
            getCHtml(c,t);
        @endif

         $('body').delegate('.business_category_id','change',function (e) {
             var  id = $(this).val();
             var p = $(this).parent().parent().parent();
             var bt = p.find('.business-type');
             bt.data('category',id);
             bt.val(0);
             runSelect2(bt);
             runSelect2(p.find('.channel-intermediary'));
             runSelect2(p.find('.business-function'));
         });



        $('body').delegate('.add-b-category','click',function (e) {
            e.preventDefault();

            var c  = (new Date().getTime());
            var t  = c+100;
            getCHtml(c,t);
        });

        $('body').delegate('.add-b-type','click',function (e) {
            e.preventDefault();
            var p = $(this).parent().parent().parent().parent().parent().parent().parent();
            var c = p.data('c');
            //var t = p.data('t');
            var t  = (new Date().getTime());
            getTHtml(p,c,t);

            runSelect2(p.find('.business-type'));
            runSelect2(p.find('.channel-intermediary'));
            runSelect2(p.find('.business-function'));
        });

    });

    function runSelect2(obj) {
        var placeholder = obj.data('placeholder');
        var url = obj.data('url');
        var multiple = (obj.data('multiple')-0>0) ? true : false;
        var category = obj.data('category')?obj.data('category'):'';
        //alert(category);
        obj.select2({
            theme: 'bootstrap',
            multiple: multiple,
            placeholder: placeholder,
            minimumInputLength: "0",
            ajax: {
                url: url,
                dataType: 'json',
                quietMillis: 250,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page,
                        category:category
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;

                    return {
                        results: $.map(data.data, function (item) {
                            //console.log(item);
                            return {
                                text: item.title,
                                id: item.id
                            }
                        }),
                        more: data.current_page < data.last_page
                    };
                },
                //cache: true
            },
        });

    }


    function runSelect2address(obj,ref,select_type) {
        var placeholder = obj.data('placeholder');
        var url = obj.data('url');
        var multiple = (obj.data('multiple')-0>0) ? true : false;
        //alert(category);
        obj.select2({
            theme: 'bootstrap',
            multiple: multiple,
            placeholder: placeholder,
            minimumInputLength: "0",
            ajax: {
                url: url,
                dataType: 'json',
                quietMillis: 250,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page,
                        ref:ref,
                        select_type:select_type
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;

                    return {
                        results: $.map(data.data, function (item) {
                            //console.log(item);
                            return {
                                text: item.title,
                                id: item.id
                            }
                        }),
                        more: data.current_page < data.last_page
                    };
                },
                //cache: true
            },
        });

    }


</script>
@endsection
{{-- End of Extra CSS and JS --}}