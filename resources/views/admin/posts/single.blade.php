@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid full-width-container value-added-detail-page">
        <div>
            <h1 class="section-title" id="services">
                <span>Edit | {{ $post->title }}</span>
            </h1><!-- End Title -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="pmd-card pmd-z-depth pmd-card-custom-form">

                    @if(!empty($post->image))
                        <div class="col-sm-12">
                            <img src="{{ url('/uploads/' . $post->image) }}" class="img-responsive" alt="image">
                        </div>
                    @endif


                    <form action="{{ route('admin_post_update', $post->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="pmd-card-body">
                            <!-- Regular Input -->

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Post image</label>
                                <input type="file" name="image" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Post Title</label>
                                <input type="text" name="title" id="name" value="{{ $post->title }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>
                            <div class="form-group pmd-textfield">
                                <input type="text" name="author" id="author" class="hidden form-control" value="{{ $post->author }}"><span class="pmd-textfield-focused"></span>
                            </div>
                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Post Sub Title</label>
                                <textarea name="sub_title" class="form-control" id="" cols="30" rows="10">{{ $post->sub_title }}</textarea>
                                <span class="pmd-textfield-focused"></span>
                            </div>
                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Post Body</label>
                                <textarea name="body" class="form-control ckeditor" id="" cols="30" rows="10">{{ $post->body }}</textarea>
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