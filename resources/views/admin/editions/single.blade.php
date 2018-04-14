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
                <span>Edit | {{ $edition->name }}</span>
            </h1><!-- End Title -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="pmd-card pmd-z-depth pmd-card-custom-form">
                    <div class="row">
                        @if(!empty($edition->image))
                            <div class="col-sm-6">
                                <img src="{{ url('/uploads/' . $edition->image) }}" class="img-responsive" alt="image">
                            </div>
                        @endif
                        @if(!empty($edition->answer))
                            <div class="col-sm-6">
                                <a href="{{ url('/uploads/' . $edition->answer) }}" class="img-responsive" alt="image"><i class="material-icons md-dark pmd-md">attach_file</i></a>
                            </div>
                        @endif

                    </div>


                    <form action="{{ route('admin_edition_update', $edition->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="pmd-card-body">
                            <!-- Regular Input -->


                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition image</label>
                                <input type="file" name="image" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition Title</label>
                                <input type="text" name="name" id="name" value="{{ $edition->name }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>


                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>Select Menu Category</label>
                                <select name="categories" class="form-control select-add-tags pmd-select2-tags select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">

                                    @php
                                        $categories = App\EditionCategory::getCategories()
                                    @endphp

                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition Page Category</label>
                                <input type="text" name="category" id="name" value="{{ $edition->category }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition Pages</label>
                                <input type="text" name="pages" id="name" value="{{ $edition->pages }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition Page Count</label>
                                <input type="text" name="page_count" id="name" value="{{ $edition->page_count }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition Answer </label>
                                <input type="text" name="answer" id="name" value="{{ $edition->answer }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition ISBN</label>
                                <input type="text" name="isbn" id="name" value="{{ $edition->isbn }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition class</label>
                                <input type="text" name="class" id="name" value="{{ $edition->class }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition Press</label>
                                <input type="text" name="press" id="name" value="{{ $edition->press }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Edition Author</label>
                                <input type="text" name="author" id="name" value="{{ $edition->author }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>


                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('admin_editions') }}" class="btn btn-primary">Back</a>
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