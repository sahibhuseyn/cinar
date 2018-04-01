@extends('admin.layout.layout')
@section('content')

    <div class="container-fluid">
        <div class="row clearfix">
            @foreach($seos as $count => $seo)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Keywords and description

                                <form action="{{ route('admin_seo_delete', $seo->id) }}" method="post" class="pull-right">
                                    {{ csrf_field() }}

                                    <div class="col-sm-4">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </div>
                                </form>
                            </h2>
                        </div>
                        <div class="body">

                            <form action="{{ route('admin_seo_update', $seo->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea type="text" class="form-control" name="keywords" rows="3" placeholder="Keywords">{{ $seo->keywords }}</textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="description" class="form-control" rows="3" placeholder="Description">{{ $seo->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add Seo desc and keywords
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin_seo_add') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea type="text" class="form-control" name="keywords" rows="3" placeholder="Keywords"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-success waves-effect">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection