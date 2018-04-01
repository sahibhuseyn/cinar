@extends('admin.layout.layout')
@section('content')


    <div class="container-fluid full-width-container value-added-detail-page">
        <div>
            <h1 class="section-title" id="services">
                <span>Facilities</span>
            </h1><!-- End Title -->
        </div>
        <!-- Table -->
        <div class="table-responsive pmd-card pmd-z-depth">
            <table class="table table-mc-red pmd-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Body</th>
                    <th>Link</th>
                    <th>Last Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($facilities as $count => $facility)


                    <tr>
                        <td data-title="Id">{{ $count+1 }}</td>
                        <td data-title="Name">{{ $facility->name }}</td>
                        <td data-title="Icon">{{ $facility->icon }}</td>
                        <td data-title="Body">{{ str_limit($facility->body, 20) }}</td>
                        <td data-title="Link"><span class="status-btn blue-bg">{{ str_limit($facility->link , 15) }}</span></td>
                        <td data-title="date">{{ Carbon\Carbon::parse($facility->updated_at)->format('d-m-Y') }}</td>
                        <td class="pmd-table-row-action">
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('admin_facility_edit', $facility->id) }}" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
                                        <i class="material-icons md-dark pmd-sm">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('admin_facility_delete', $facility->id) }}" class="deleteForm list-inline" method="post">
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

        <div class="row">
            <div class="col-sm-12">
                <div class="pmd-card pmd-z-depth pmd-card-custom-form">
                    <form action="{{ route('admin_facility_add') }}" method="post">
                        {{ csrf_field() }}
                        <div class="pmd-card-body">
                        <!-- Regular Input -->
                        <div class="form-group pmd-textfield">
                            <label for="name" class="control-label">Facility Name</label>
                            <input type="text" name="name" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                        </div>
                        <!-- Password Input -->
                        <div class="form-group pmd-textfield">
                            <label for="icon" class="control-label">Facility Icon</label>
                            <input id="icon" name="icon" class="form-control" type="text"><span class="pmd-textfield-focused"></span>
                        </div>
                        <!--Help Text Input -->
                        <div class="form-group pmd-textfield">
                            <label for="help1">Facility Body</label>
                            <textarea class="form-control" name="body" cols="30" rows="10"></textarea>
                            <span class="pmd-textfield-focused"></span>
                        </div>
                            <div class="form-group pmd-textfield">
                                <label for="link" class="control-label">Facility Link</label>
                                <input id="link" name="link" class="form-control" type="text"><span class="pmd-textfield-focused"></span>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection