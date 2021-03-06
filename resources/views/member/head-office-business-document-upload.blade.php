<?php
$id = isset($row->id)?$row->id:0;
$logo_vertical = isset($row->logo_vertical)?$row->logo_vertical:'no-image.png';
$logo_horizontal = isset($row->logo_horizontal)?$row->logo_horizontal:'no-image.png';
$company_view = isset($row->company_view)?$row->company_view:'no-image.png';
$landmark = isset($row->landmark)?$row->landmark:'no-image.png';
$patent = isset($row->patent)?$row->patent:'no-image.png';
$vatin = isset($row->vatin)?$row->vatin:'no-image.png';
$working_room = isset($row->working_room)?$row->working_room:'no-image.png';
$meeting_room = isset($row->meeting_room)?$row->meeting_room:'no-image.png';

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
                        <h3 class="box-title">LOGO  COMPANY</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($logo_vertical!=''?$logo_vertical:'no-image.png'),
                            'is_first' => 1,
                            'label' => "LOGO  COMPANY (Vertical)",
                            'name' => "logo_vertical",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 2/3, // ommit or set to 0 to allow any aspect ratio
                         ]))

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($logo_horizontal!=''?$logo_horizontal:'no-image.png'),
                            'is_first' => 0,
                            'label' => "LOGO  COMPANY  (Horizontal)",
                            'name' => "logo_horizontal",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 3/2, // ommit or set to 0 to allow any aspect ratio
                         ]))

                    </div>

                    <div class="box-header">
                        <h3 class="box-title">COMPANY VIEW</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($company_view!=''?$company_view:'no-image.png'),
                            'is_first' => 0,
                            'label' => "COMPANY VIEW",
                            'name' => "company_view",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 3/2, // ommit or set to 0 to allow any aspect ratio
                         ]))

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($landmark!=''?$landmark:'no-image.png'),
                            'is_first' => 0,
                            'label' => "LANDMARK",
                            'name' => "landmark",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 3/2, // ommit or set to 0 to allow any aspect ratio
                         ]))

                    </div>

                    <div class="box-header">
                        <h3 class="box-title">MOC LICENCE</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($patent!=''?$patent:'no-image.png'),
                            'is_first' => 0,
                            'label' => "PATENT",
                            'name' => "patent",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
                         ]))

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($vatin!=''?$vatin:'no-image.png'),
                            'is_first' => 0,
                            'label' => "VAT IN",
                            'name' => "vatin",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
                         ]))

                    </div>

                    <div class="box-header">
                        <h3 class="box-title">RECEPTIONIST</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($working_room!=''?$working_room:'no-image.png'),
                            'is_first' => 0,
                            'label' => "WORKING ROOM",
                            'name' => "working_room",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 3/2, // ommit or set to 0 to allow any aspect ratio
                         ]))

                        @include('vendor.backpack.crud.my.image2', array('field' =>
                        ['default' => asset($meeting_room!=''?$meeting_room:'no-image.png'),
                            'is_first' => 0,
                            'label' => "MEETING ROOM",
                            'name' => "meeting_room",
                            'type' => 'image2',
                            'upload' => true,
                            'crop' => true, // set to true to allow cropping, false to disable
                            'aspect_ratio' => 3/2, // ommit or set to 0 to allow any aspect ratio
                         ]))

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
    @stack('crud_fields_styles')
@endsection



<!-- include field specific select2 js-->
@section('after_scripts')
    @parent


    @stack('crud_fields_scripts')
<script>


</script>
@endsection
{{-- End of Extra CSS and JS --}}