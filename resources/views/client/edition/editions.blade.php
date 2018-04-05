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
            <ul class="gallery-menu">
                <li class="active" data-filter="*">Hamısı</li>
                <li data-filter=".bir">1-ci sinif</li>
                <li data-filter=".iki">2-ci sinif</li>
                <li data-filter=".uc">3-cü sinif</li>
                <li data-filter=".dord">4-cü sinif</li>
            </ul>
            <div class="gallery-items">
                <a href="edition_details.html">
                    <div class="gallery-item bir">
                        <div class="gallery-image">
                            <img src="images/sinif1.jpg" alt="gallery image" class="img-responsive">
                        </div>
                    </div>
                </a>
                <a href="edition_details.html">
                    <div class="gallery-item iki">
                        <div class="gallery-image">
                            <img src="images/sinif2.jpg" alt="gallery image" class="img-responsive">
                        </div>
                    </div>
                </a>
                <a href="edition_details.html">
                    <div class="gallery-item uc">
                        <div class="gallery-image">
                            <img src="images/sinif3.jpg" alt="gallery image" class="img-responsive">
                        </div>
                    </div>
                </a>
                <a href="edition_details.html">
                    <div class="gallery-item dord">
                        <div class="gallery-image">
                            <img src="images/sinif4.jpg" alt="gallery image" class="img-responsive">
                        </div>
                    </div>
                </a>
                <a href="edition_details.html">
                    <div class="gallery-item bir">
                        <div class="gallery-image">
                            <img src="images/sinif1.jpg" alt="gallery image" class="img-responsive">
                        </div>
                    </div>
                </a>
                <a href="edition_details.html">
                    <div class="gallery-item iki">
                        <div class="gallery-image">
                            <img src="images/sinif2.jpg" alt="gallery image" class="img-responsive">
                        </div>
                    </div>
                </a>
                <a href="edition_details.html">
                    <div class="gallery-item uc">
                        <div class="gallery-image">
                            <img src="images/sinif3.jpg" alt="gallery image" class="img-responsive">
                        </div>
                    </div>
                </a>
                <a href="edition_details.html">
                    <div class="gallery-item dord">
                        <div class="gallery-image">
                            <img src="images/sinif4.jpg" alt="gallery image" class="img-responsive">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Edition End here -->

@endsection

@section('js')
    <script src="{{ url('client/js/isotope.min.js') }}"></script>
@endsection