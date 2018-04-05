@extends('client.layout.layout')
@section('content')
    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Our Contact Info</h3>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>-</li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End here -->

    <!-- Contact Start here -->
    <section class="contact contact-page">
        <div class="contact-details padding-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul>

                            @php
                                $settings = App\UserSetting::getSettings();
                            @endphp

                            @foreach($settings as $setting)
                            <li class="contact-item">
                                <span class="icon flaticon-signs"></span>
                                <div class="content">
                                    <h4>Our Location</h4>
                                    <p>{{ $setting->address }}</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <span class="icon flaticon-smartphone"></span>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <p>{{ $setting->phone }}</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <span class="icon flaticon-message"></span>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p>{{ $setting->email }}</p>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <form class="contact-form">
                            <input type="text" name="name" placeholder="Your Name" class="contact-input">
                            <input type="email" name="email" placeholder="Your Email" class="contact-input">
                            <textarea rows="5" class="contact-input">Your Messages</textarea>
                            <input type="submit" name="submit" value="Send Message" class="contact-button">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map" id="map-canvas"></div>
    </section>
    <!-- Contact End here -->
@endsection