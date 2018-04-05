@extends('client.layout.layout')
@section('content')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Edition Name</h3>
                <ul>
                    <li><a href="{{ route('index') }}">Əsas Səhifə</a></li>
                    <li>-</li>
                    <li>{{ $edition->name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End here -->
    <!-- Edition Details Start here -->
    <section class="features padding-120">
        <div class="container">
            <div class="section-header">
                <h3>{{ $edition->name }}</h3>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="features-left">
                        <div class="feature-item">
                            <div class="content">
                                <h4>055-224-56-26</h4>
                                <p>Sifariş üçün zəng edin</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="content">
                                <a href="{{ $edition->pages }}" class="button-default mb">Nümunə səhifələr</a>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="content">
                                <a href="{{ $edition->answer }}" class="button-default">Cavabları yüklə</a>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="feature-image">
                        <img src="{{ url('/uploads/'.$edition->image) }}" alt="{{ $edition->name }}" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="features-right">
                        <div class="feature-item">
                            <div class="icon flaticon-settings"></div>
                            <div class="content">
                                <h4>ISBN</h4>
                                <p>{{ $edition->isbn }}</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon flaticon-pen"></div>
                            <div class="content">
                                <h4>Sinif</h4>
                                <p>{{ $edition->class }}</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon flaticon-people"></div>
                            <div class="content">
                                <h4>Muellif</h4>
                                <p>{{ $edition->author }}</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon flaticon-signs"></div>
                            <div class="content">
                                <h4>Nəşriyyat</h4>
                                <p>{{ $edition->press }}</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon flaticon-symbols"></div>
                            <div class="content">
                                <h4>Səhifə sayı</h4>
                                <p>{{ $edition->page_count }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Edition Details End here -->

@endsection