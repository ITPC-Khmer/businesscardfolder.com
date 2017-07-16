<?php
$id = isset($row->id)?$row->id:0;
$official_name = isset($row->official_name)?$row->official_name:'';
$business_type_json = isset($row->business_type_json)?json_decode($row->business_type_json):[];
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
                    <div class="box-header">
                        <h3 class="box-title">HEAD OFFICE BUSINESS CARD REGISTRATION FORM</h3>
                    </div>
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

</script>
@endsection
{{-- End of Extra CSS and JS --}}