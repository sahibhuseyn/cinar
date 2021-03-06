@extends('client.layout.layout')
@section('content')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Edition</h3>
                <ul>
                    <li><a href="{{ route('index') }}">Əsas Səhifə</a></li>
                    <li>-</li>
                    <li>Nəşrlər</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End here -->




    <!-- Edition Start here -->
    <section class="gallery padding-120">
        <div class="container">

            <div class="gallery-items">

                @foreach($editions as $edition)
                    <a href="{{ route('edition_single', $edition->slug) }}">
                        <div class="gallery-item {{ preg_replace('/\s+/', '' ,$edition->category) }}">
                            <div class="gallery-image">
                                <img src="{{ url('/uploads/'.$edition->image) }}" alt="gallery image"
                                     class="img-responsive">
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Edition End here -->

@endsection

@section('js')
    <script src="{{ url('client/js/isotope.min.js') }}"></script>
@endsection