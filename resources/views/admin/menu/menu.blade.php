@extends('admin.layout.layout')
@section('content')

    {{--menu list goes here--}}

    <div class="container-fluid full-width-container value-added-detail-page">
        <div>
            <h1 class="section-title" id="services">
                <span>Menus</span>
            </h1><!-- End Title -->
        </div>
        <!-- Table -->
        <div class="table-responsive pmd-card pmd-z-depth">
            <table class="table table-mc-red pmd-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Last Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($menus as $count => $menu)


                    <tr>
                        <td data-title="Id">{{ $count+1 }}</td>
                        <td data-title="Name">{{ $menu->name }}</td>
                        <td data-title="date">{{ Carbon\Carbon::parse($menu->updated_at)->format('d-m-Y') }}</td>
                        <td class="pmd-table-row-action">
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('admin_menu_edit', $menu->id) }}" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
                                        <i class="material-icons md-dark pmd-sm">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('admin_menu_delete', $menu->id) }}" class="deleteForm list-inline" method="post">
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
                </tbody>
            </table>
        </div>

    {{--here goes add menu section--}}

    <div class="row">
        <div class="col-sm-12">
            <div class="pmd-card pmd-z-depth pmd-card-custom-form">
                <h2 class="btn btn-primary pmd-ripple-effect">Add new menu</h2>
                <form action="{{ route('admin_menu_add') }}" method="post">
                    {{ csrf_field() }}
                    <div class="pmd-card-body">
                        <!-- Regular Input -->
                        <div class="form-group pmd-textfield">
                            <label for="name" class="control-label">Menu Name</label>
                            <input type="text" name="name" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>

@endsection