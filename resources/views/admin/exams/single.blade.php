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
                <span>Edit | {{ $exam->name }}</span>
            </h1><!-- End Title -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="pmd-card pmd-z-depth pmd-card-custom-form">

                        @if(!empty($exam->image))
                            <div class="col-sm-4">
                                <img src="{{ url('/uploads/' . $exam->image) }}" class="img-responsive" alt="image">
                            </div>
                        @endif
                        @if(!empty($exam->answer_jpg))
                            <div class="col-sm-4">
                                <img src="{{ url('/uploads/' . $exam->answer_jpg) }}" class="img-responsive" alt="image">
                            </div>
                        @endif
                        @if(!empty($exam->answer_pdf))
                            <div class="col-sm-4">
                                <a href="{{ url('/uploads/' . $exam->answer_pdf) }}" class="img-responsive" alt="image"><i class="material-icons md-dark pmd-md">attach_file</i></a>
                            </div>
                        @endif


                    <form action="{{ route('admin_exam_update', $exam->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="pmd-card-body">
                            <!-- Regular Input -->


                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Exam image</label>
                                <input type="file" name="image" id="name" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>

                            <div class="form-group pmd-textfield">
                                <label for="name" class="control-label">Exam Title</label>
                                <input type="text" name="name" id="name" value="{{ $exam->name }}" class="form-control"><span class="pmd-textfield-focused"></span>
                            </div>


                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>Select Category</label>
                                <select name="categories" class="form-control select-add-tags pmd-select2-tags select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">

                                    @php
                                        $categories = App\SubMenu::getSubMenu()
                                    @endphp

                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
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

@endsection