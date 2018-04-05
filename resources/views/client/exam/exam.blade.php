@extends('client.layout.layout')
@section('content')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Mənim Sınaq İmtahanım - <span>Oktyabr seriyası</span></h3>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>-</li>
                    <li><span>Oktyabr seriyası</span></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End here -->


    <!-- Classes Start here -->
    <section class="classes padding-120">
        <div class="container">
            <div class="row">

                @foreach($exams as $exam)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="class-item">
                            <div class="image">
                                <img src="{{ url('/uploads/'.$exam->image) }}" alt="class image" class="img-responsive">
                            </div>
                            <ul class="schedule">
                                <a href="{{ $exam->pages }}" target="_blank">
                                    <li>
                                        <span>Nümunə Səhifələr</span>
                                    </li>
                                </a>
                                <a href="{{ $exam->answer_pdf }}" target="_blank">
                                    <li>
                                        <span>Cavablar (PDF)</span>
                                    </li>
                                </a>
                                <a href="{{ $exam->answer_jpg }}" target="_blank">
                                    <li>
                                        <span>Cavablar (JPG)</span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- Classes End here -->

@endsection