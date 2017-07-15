@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            User Account
            {{--<small>{{ trans('backpack::base.first_page_you_see') }}</small>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="">User Account</a></li>
        </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User Account</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <td  style="width: 200px">USER ID</td>
                            <td><a href="{{ url('/'.create_code_number($row->id)) }}">{{ create_code_number($row->id) }}</a></td>
                            <td  style="width: 40px"></td>
                        </tr>
                        <tr>
                            <td  style="width: 200px">USER NAME</td>
                            <td>{{ $row->username }}</td>
                            <td  style="width: 40px"><a href="{{ url("admin/member/{$row->id}/edit") }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                        <tr>
                            <td  style="width: 200px">BUSINESS NAME</td>
                            <td>{{ $row->name }}</td>
                            <td  style="width: 40px"><a href="{{ url("admin/member/{$row->id}/edit") }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                        <tr>
                            <td  style="width: 200px">SUB DOMAIN</td>
                            <td><a href="{{ url('/'.create_code_number($row->id)) }}">{{ url('/'.create_code_number($row->id)) }}</a></td>
                            <td  style="width: 40px"><a href="{{ url("admin/member/{$row->id}/edit") }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                        <tr>
                            <td  style="width: 200px">E-MAIL ADDRESS</td>
                            <td><a href="{{ $row->email }}">{{ $row->email }}</a></td>
                            <td  style="width: 40px"><a href="{{ url("admin/member/{$row->id}/edit") }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                        <tr>
                            <td  style="width: 200px">MOBILE PHONE</td>
                            <td><a href="{{ $row->phone }}">{{ $row->phone }}</a></td>
                            <td  style="width: 40px"><a href="{{ url("admin/member/{$row->id}/edit") }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                        <tr>
                            <td  style="width: 200px">Photo</td>
                            <td>
                                <img src="{{ getImageUrl($row->photo) }}" height="100">
                            </td>
                            <td  style="width: 40px"><a href="{{ url("admin/member/{$row->id}/edit") }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection