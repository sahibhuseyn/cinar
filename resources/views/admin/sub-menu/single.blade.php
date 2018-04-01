@extends('admin.layout.layout')
@section('content')

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit | {{ $subMenu->name }}
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin_sub_menu_update', $subMenu->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $subMenu->name }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>Select Main Menu*</label>
                                <select name="menu_id" class="select-simple form-control pmd-select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="-"></option>
                                    @foreach($menus as $menu)
                                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                    @endforeach

                                </select><span class="select2 select2-container select2-container--bootstrap select2-container--below select2-container--focus" dir="ltr" style="width: 236px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-21ke-container"><span class="select2-selection__rendered" id="select2-21ke-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{ route('admin_sub_menu') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection