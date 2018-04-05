@extends('client.layout.layout')
@section('content')
    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>About Logo</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>-</li>
                    <li>Logo</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End here -->


    <!-- About Start here -->
    <section class="about about-two padding-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="about-image">
                        <img src="{{ url('/client/images/logo1.png') }}" alt="about image" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="about-content">
                        <h3 class="text-center">Loqo</h3>
                        <p>“ÇİNAR YAYIMLARI” MMC-nin loqosunda ilk gözə çarpan simvol çinar yarpağıdır. Yarpağın ehtiva etdiyi rənglər Azərbaycan bayrağını təmsil edir. Bu da təhsil sahəsində yeniliyi, müstəqilliyi və özünəməxsusluğu tərənnüm edir. Çinar- güc, uzun ömür, dayanıqlılıq və ucalıq rəmzidir. Çinar ağacının əsas xüsusiyyətlərindən biri kökünün torpağın ən dərin qatlarına uzanaraq oradakı suyu və mineralları ən uzaqdakı yarpağına ötürməsidir. Biz də Çinar yayımları olaraq təhsil sahəsində ən dərin bilikləri ən uzaq şagirdlərə güclü, dayanıqlı və uzun ömürlü şəkildə çatdırmağı hədəfləyirik və bu da bizim təhsildə ucalığımızın nişanəsidir.</p>
                        <p>Həmçinin loqoda söz və biliyin ucalığının nişanəsi olan qələm işarəsi də yerləşir.</p>
                        <p><b>Şirkətin şüarı:</b> “Təməlində sevgi var”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End here -->
@endsection