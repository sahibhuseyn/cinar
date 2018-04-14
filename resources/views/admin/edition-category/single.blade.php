@extends('admin.layout.layout')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/select2-bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/pmd-select2.css') }}"/>

@endsection
@section('content')

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit | {{ $category->name }}
                        </h2>
                    </div>
                    <div class="body">

                        <div class="col-sm-12"><img src="{{ url('uploads/'.$category->image) }}" alt=""></div>
                        
                        <form action="{{ route('admin_edition_category_update', $category->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $category->name }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>Select Menu Category</label>
                                <select name="submenu_id" class="form-control select-add-tags pmd-select2-tags select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">

                                    @php
                                        $categories = App\SubMenu::getSubMenu()
                                    @endphp

                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="image" placeholder="Name" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{ route('admin_edition_categories') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')

    <script src="{{ url('/admin/components/select2/js/select2.full.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            <!-- Simple Selectbox -->
            $(".pmd-select2-tags").select2({
                theme: "bootstrap",
                minimumResultsForSearch: Infinity,
            });
            <!-- Selectbox with search -->
            $(".select-with-search").select2({
                theme: "bootstrap"
            });
            <!-- Select Multiple Tags -->
            $(".select-tags").select2({
                tags: false,
                theme: "bootstrap",
            });
            <!-- Select & Add Multiple Tags -->
            $(".select-add-tags").select2({
                tags: true,
                theme: "bootstrap",
            });
        });
    </script>


    <script src="{{ url('/admin/components/select2/js/pmd-select2.js') }}"></script>

@endsection