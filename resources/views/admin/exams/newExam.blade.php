@extends('admin.layout.layout')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/select2-bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/components/select2/css/pmd-select2.css') }}"/>

@endsection
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
                    <form action="{{ route('admin_exam_add') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="pmd-card-body">
                            <!-- Regular Input -->


                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>Select Category</label>
                                <select name="categories" class="form-control select-add-tags pmd-select2-tags select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                    @php
                                        $categories = App\SubMenu::getSubMenu();
                                    @endphp
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Exam Title</label>
                                <input type="text" name="name" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Exam image</label>
                                <input type="file" name="image" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Exam Answer image</label>
                                <input type="file" name="answer_jpg" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>
                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Exam Answer PDF</label>
                                <input type="file" name="answer_pdf" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('admin_exams') }}" class="btn btn-primary">Back</a>
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
    <script src="https://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>

@endsection