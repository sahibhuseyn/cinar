@extends('admin.layout.layout')
@section('content')

    {{--menu list goes here--}}

    <div class="container-fluid full-width-container value-added-detail-page">
        <div>
            <h1 class="section-title" id="services">
                <span>Sub Menus</span>
            </h1><!-- End Title -->
        </div>
        <!-- Table -->
        <div class="table-responsive pmd-card pmd-z-depth">
            <table class="table table-mc-red pmd-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Main Menu</th>
                    <th>Last Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>


                @foreach($menu as $count => $item)


                @foreach($item->submenu as $submenu)

                    <tr>
                        <td data-title="Id">{{ $submenu->id }}</td>
                        <td data-title="Name">{{ $submenu->name }}</td>
                        <td data-title="Link"><span class="status-btn blue-bg">{{ $item->name }}</span></td>
                        <td data-title="date">{{ Carbon\Carbon::parse($submenu->updated_at)->format('d-m-Y') }}</td>
                        <td class="pmd-table-row-action">
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('admin_sub_menu_edit', $submenu->id) }}" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
                                        <i class="material-icons md-dark pmd-sm">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('admin_sub_menu_delete', $submenu->id) }}" class="deleteForm list-inline" method="post">
                                        {{ csrf_field() }}
                                        <a href="#" class="btn submit pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
                                            <i class="material-icons md-dark pmd-sm">delete</i>
                                        </a>
                                    </form>

                                </li>
                            </ul>
                        </td>
                    </tr>


                @endforeach
                @endforeach
                </tbody>
            </table>
        </div>

        {{--here goes add menu section--}}

        <div class="row">
            <div class="col-sm-12">
                <div class="pmd-card pmd-z-depth pmd-card-custom-form">
                    <h2 class="btn btn-primary pmd-ripple-effect">Add new menu</h2>
                    <form action="{{ route('admin_sub_menu_add') }}" method="post">
                        {{ csrf_field() }}
                        <div class="pmd-card-body">
                            <!-- Regular Input -->
                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Sub Menu Name</label>
                                <input type="text" name="name" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>Select Main Menu*</label>
                                <select name="parent_id" class="select-simple form-control pmd-select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="-"></option>
                                    @foreach($menus as $menu)
                                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                    @endforeach

                                </select><span class="select2 select2-container select2-container--bootstrap select2-container--below select2-container--focus" dir="ltr" style="width: 236px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-21ke-container"><span class="select2-selection__rendered" id="select2-21ke-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="pmd-textfield-focused"></span>
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection