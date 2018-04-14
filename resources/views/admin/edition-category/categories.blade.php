@extends('admin.layout.layout')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/select2-bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/pmd-select2.css') }}"/>

@endsection

@section('content')

    {{--menu list goes here--}}

    <div class="container-fluid full-width-container value-added-detail-page">
        <div>
            <h1 class="section-title" id="services">
                <span>Tags</span>
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

                @foreach($categories as $count => $category)


                    <tr>
                        <td data-title="Id">{{ $count+1 }}</td>
                        <td data-title="Name">{{ $category->name }}</td>
                        <td data-title="date">{{ Carbon\Carbon::parse($category->updated_at)->format('d-m-Y') }}</td>
                        <td class="pmd-table-row-action">
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('admin_edition_category_edit', $category->id) }}" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
                                        <i class="material-icons md-dark pmd-sm">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('admin_edition_category_delete', $category->id) }}" class="deleteForm list-inline" method="post">
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
                    <h2 class="btn btn-primary pmd-ripple-effect">Add category</h2>
                    <form action="{{ route('admin_add_new_edition_category') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="pmd-card-body">
                            <!-- Regular Input -->
                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
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


                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Category Image</label>
                                <input type="file" name="image" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
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