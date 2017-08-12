<?php
$id = 0;
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
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Status</th>
                            <th>Department</th>
                            <th>Position</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <td>1.</td>
                            <td>{{ $row->given_name }}</td>
                            <td>{{ $row->sex }}</td>
                            <td>{{ $row->married_status }}</td>
                            <td>{{ $row->department }}</td>
                            <td>{{ $row->position }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
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



    </script>
@endsection
{{-- End of Extra CSS and JS --}}