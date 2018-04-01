@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid full-width-container value-added-detail-page">
        <div>
            <h1 class="section-title" id="services">
                <span>Add New Post</span>
            </h1><!-- End Title -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="pmd-card pmd-z-depth pmd-card-custom-form">
                    <h2 class="btn btn-primary pmd-ripple-effect">Add post</h2>
                    <form action="{{ route('admin_post_add') }}" method="post">
                        {{ csrf_field() }}
                        <div class="pmd-card-body">
                            <!-- Regular Input -->

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Post image</label>
                                <input type="file" name="image" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Post Title</label>
                                <input type="text" name="title" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>
                            <div class="form-group pmd-textfield">
                                <input type="text" name="author" id="author" class="hidden form-control" value="{{ Auth::user()->name }}"><span class="pmd-textfield-focused"></span>
                            </div>
                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Post Sub Title</label>
                                <textarea name="sub_title" class="form-control" id="" cols="30" rows="10"></textarea>
                                <span class="pmd-textfield-focused"></span>
                            </div>
                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Post Sub Title</label>
                                <textarea name="body" class="form-control ckeditor" id="" cols="30" rows="10"></textarea>
                                <span class="pmd-textfield-focused"></span>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('admin_posts') }}" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection