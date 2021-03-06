<?php
$id = isset($row->id)?$row->id:0;

$member_id = isset($row->member_id)?$row->member_id:0;
$company_id = isset($row->company_id)?$row->company_id:0;
$id_number = isset($row->id_number)?$row->id_number:'';
$passport_number = isset($row->passport_number)?$row->passport_number:'';
$given_name = isset($row->given_name)?$row->given_name:'';
$family_name = isset($row->family_name)?$row->family_name:'';
$married_status = isset($row->married_status)?$row->married_status:'';
$sex = isset($row->sex)?$row->sex:'';
$department_id = isset($row->department_id)?$row->department_id:'0';
$position_id = isset($row->position_id)?$row->position_id:'0';

$mobile_number = isset($row->mobile_number)?json_decode($row->mobile_number,true):[];
$telephone_number = isset($row->telephone_number)?json_decode($row->telephone_number,true):[];

$email = isset($row->email)?json_decode($row->email,true):[];

$fax = isset($row->fax)?$row->fax:'';
$website = isset($row->website)?$row->website:'';

$social_media = isset($row->social_media)?json_decode($row->social_media,true):[];
$mobile_network = isset($row->mobile_network)?json_decode($row->mobile_network,true):[];

$code = '';


$card_vertical = isset($row->card_vertical)?$row->card_vertical:'';
$card_horizontal = isset($row->card_horizontal)?$row->card_horizontal:'';
$id_image = isset($row->id_image)?$row->id_image:'';
$passport_image = isset($row->passport_image)?$row->passport_image:'';
$photo = isset($row->photo)?$row->photo:'';

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
            <form action="{{ url('bcf/'.create_code_number(getMember2ID()).'/head-office-business-card-form') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $id }}">
                <input type="hidden" name="company_id" value="{{ $company_id }}">
                <div class="box">
                {{--<div class="box-header">
                    <h3 class="box-title">HEAD OFFICE BUSINESS CARD REGISTRATION FORM</h3>
                </div>--}}
                <!-- /.box-header -->
                    <div class="box-body no-padding">

                        <table class="table">
                            <tr><td colspan="3">INFORMATION</td></tr>

                            <tr style="border: 1px solid #0000cc;">
                                <td colspan="3" style="border: 1px solid #0081ff;marregiongin-top: 5px; ">
                                    <table class="table" style="width: 100%;margin-top: 5px; ">
                                        <tr>
                                            <td style="width: 200px;">ID Number</td>
                                            <td colspan="2">
                                                 <input class="form-control" name="id_number" value="{{$id_number}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Passport Number</td>
                                            <td colspan="2">
                                                 <input class="form-control" name="passport_number" value="{{$passport_number}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Given Name</td>
                                            <td colspan="2">
                                                 <input class="form-control" name="given_name" value="{{$given_name}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Family Name</td>
                                            <td colspan="2">
                                                 <input class="form-control" name="family_name" value="{{$family_name}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Married Status</td>
                                            <td colspan="2">
                                                @php

                                                           $field = [   // Enum
                                                                    'name' => 'married_status',
                                                                    'label' => 'Married Status',
                                                                    'type' => 'enum',
                                                                    'model' => '\App\Models\BCF\CompanyNameCard',
                                                                ];
                                                @endphp
                                                @include('vendor.backpack.crud.my.enum2', compact('field'))
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Gender</td>
                                            <td colspan="2">
                                                @php

                                                    $field = [   // Enum
                                                             'name' => 'sex',
                                                             'label' => 'Sex',
                                                             'type' => 'enum',
                                                             'model' => '\App\Models\BCF\CompanyNameCard',
                                                         ];
                                                @endphp
                                                @include('vendor.backpack.crud.my.enum2', compact('field'))
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Status</td>
                                            <td colspan="2">
                                                @php

                                                    $field = [   // Enum
                                                             'name' => 'status',
                                                             'label' => 'Status',
                                                             'type' => 'enum',
                                                             'model' => '\App\Models\BCF\CompanyNameCard',
                                                         ];
                                                @endphp
                                                @include('vendor.backpack.crud.my.enum2', compact('field'))
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Department</td>
                                            <td colspan="2">
                                                <select name="department_id"  class="form-control department_id" data-url="{{ url('api/bcf-get-department') }}">
                                                    <option value="0"></option>
                                                    @php
                                                       $rows_op = \App\Models\Department::orderBy('title','asc')->get();
                                                    @endphp
                                                    @if(count($rows_op)>0)
                                                        @foreach($rows_op as $row)
                                                            <option @if($department_id == $row->id) selected @endif value="{{$row->id}}">{{$row->title}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Position</td>
                                            <td colspan="2">
                                                <select name="position_id"  class="form-control position_id" data-url="{{ url('api/bcf-get-position') }}">
                                                    <option value="0"></option>
                                                    @php
                                                        $rows_op = \App\Models\Position::where('department_id',$department_id)->orderBy('title','asc')->get();
                                                    @endphp
                                                    @if(count($rows_op)>0)
                                                        @foreach($rows_op as $row)
                                                            <option @if($department_id == $row->id) selected @endif value="{{$row->id}}">{{$row->title}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
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




                        </table>
                    </div>
                    <!-- /.box-body -->

                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($card_vertical!=''?$card_vertical:'no-image.png'),
                            'is_first' => 1,
                            'label' => "card_vertical",
                            'name' => "card_vertical",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 3/2, // ommit or set to 0 to allow any aspect ratio
                         ]))

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($card_horizontal!=''?$card_horizontal:'no-image.png'),
                            'is_first' => 0,
                            'label' => "card_horizontal",
                            'name' => "card_horizontal",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 3/4, // ommit or set to 0 to allow any aspect ratio
                         ]))

                    </div>
                         <!-- /.box-header -->
                    <div class="box-body no-padding">

                      {{--  $card_vertical = isset($row->card_vertical)?$row->card_vertical:'';
                        $card_horizontal = isset($row->card_horizontal)?$row->card_horizontal:'';
                        $id_image = isset($row->id_image)?$row->id_image:'';
                        $passport_image = isset($row->passport_image)?$row->passport_image:'';
                        $photo = isset($row->photo)?$row->photo:'';--}}

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($id_image!=''?$id_image:'no-image.png'),
                            'is_first' => 0,
                            'label' => "id_image",
                            'name' => "id_image",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
                         ]))

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($passport_image!=''?$passport_image:'no-image.png'),
                            'is_first' => 0,
                            'label' => "passport_image",
                            'name' => "passport_image",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
                         ]))

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($photo!=''?$photo:'no-image.png'),
                            'is_first' => 0,
                            'label' => "photo",
                            'name' => "photo",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
                         ]))

                    </div>

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

                        <a href="{{ url('bcf/'.create_code_number(getMember2ID()).'/head-office-business-card-list' ) }}" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;Cancel</a>
                    </div>
                </div><!-- /.box-footer-->
            </form>

        </div>
    </div>
@endsection

{{-- FIELD CSS - will be loaded in the after_styles section --}}
@section('after_styles')
    @parent

    @stack('crud_fields_styles')
    <!-- include select2 css-->
    <link href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection



<!-- include field specific select2 js-->
@section('after_scripts')
    @parent

    @stack('crud_fields_scripts')
    <script>


    </script>
    <!-- include select2 js-->
    <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
    <script>

        jQuery(document).ready(function() {
            runSelect2($('.department_id'));
            runSelect2($('.position_id'));

            $('.department_id').on('change',function () {
                $('.position_id').val(0);
                runSelect2($('.position_id'));
            });
        });

        function runSelect2(obj) {
            var placeholder = obj.data('placeholder');
            var url = obj.data('url');
            var multiple = false;
            var department_id = $('.department_id').val();
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
                            department_id:department_id
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