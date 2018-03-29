@extends('client.layout.layout')

@section('content')


    @include('client.partials.slider')

    <!-- facility Start here -->
    <section class="facility facility-two">
        <div class="container">
            <div class="facility-items">

                @foreach($facilities as $facility)


                    <div class="facility-item">
                        <div class="front-part">
                            <span class="icon-two {{ $facility->icon }}"></span>
                            <h4>{{ $facility->name }}</h4>
                        </div>
                        <div class="back-part">
                            <span class="icon-two {{ $facility->icon }}"></span>
                            <a href="{{ $facility->link }}">
                                <h4>{{ $facility->name }}</h4>
                            </a>
                            <p>{{ $facility->body }}</p>
                        </div>
                    </div>


                @endforeach

            </div>
        </div>
    </section>
    <!-- facility End here -->



@endsection