@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid full-width-container value-added-detail-page">
        <div>
            <h1 class="section-title" id="services">
                <span>Editions</span>
            </h1><!-- End Title -->
            <a href="{{ route('admin_add_new_edition') }}" class="btn btn-success">Add new</a>
        </div>
        <!-- Table -->
        <div class="table-responsive pmd-card pmd-z-depth">
            <table class="table table-mc-red pmd-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Last Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($category as $item)

                    @foreach($item->edition as $edition)


                        <tr>
                            <td data-title="Id"></td>
                            <td data-title="Name">{{ $edition->name }}</td>
                            <td data-title="Name">{{ $item->name }}</td>
                            <td data-title="date">{{ Carbon\Carbon::parse($edition->updated_at)->format('d-m-Y') }}</td>
                            <td class="pmd-table-row-action">
                                <ul class="list-inline">
                                    <li>
                                        <a href="{{ route('admin_edition_edit', $edition->id) }}" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
                                            <i class="material-icons md-dark pmd-sm">edit</i>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('admin_edition_delete', $edition->id) }}" class="deleteForm list-inline" method="post">
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


    </div>

@endsection