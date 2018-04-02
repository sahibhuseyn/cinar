@extends('admin.layout.layout')
@section('content')

    {{--menu list goes here--}}

    <div class="container-fluid full-width-container value-added-detail-page">
        <div>
            <h1 class="section-title" id="services">
                <span>Posts</span>
            </h1><!-- End Title -->
            <a href="{{ route('admin_add_new_post') }}" class="btn btn-success">Add new</a>
        </div>
        <!-- Table -->
        <div class="table-responsive pmd-card pmd-z-depth">
            <table class="table table-mc-red pmd-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Body</th>
                    <th>Last Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($posts as $count => $post)


                    <tr>
                        <td data-title="Id">{{ $count+1 }}</td>
                        <td data-title="Name">{{ $post->title }}</td>
                        <td data-title="Name">{{ $post->sub_title }}</td>
                        <td data-title="Name">{{ str_limit($post->body, 15) }}</td>
                        <td data-title="date">{{ Carbon\Carbon::parse($post->updated_at)->format('d-m-Y') }}</td>
                        <td class="pmd-table-row-action">
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('admin_post_edit', $post->id) }}" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
                                        <i class="material-icons md-dark pmd-sm">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('admin_post_delete', $post->id) }}" class="deleteForm list-inline" method="post">
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

        <div class="pmd-card-footer">
            {{ $posts->links() }}
        </div>

    </div>

@endsection