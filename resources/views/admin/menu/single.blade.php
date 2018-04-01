@extends('admin.layout.layout')
@section('content')

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit | {{ $menu->name }}
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin_menu_update', $menu->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $menu->name }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{ route('admin_menu') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection