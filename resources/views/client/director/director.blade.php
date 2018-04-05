@extends('client.layout.layout')
@section('content')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Rəhbərlik Haqqında</h3>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>-</li>
                    <li>Rəhbərlik</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End here -->


    <!-- About Director Start here -->
    <section class="about about-two padding-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-image">
                        <img src="{{ url('/client/images/rehberlik.jpg') }}" alt="about image" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="about-content">
                        <h3 class="text-center">Rəhbərlik</h3>
                        <p>Təhsil sahəsinə keyfiyyətli nəşrlərlə addım atan <b>“ÇİNAR YAYIMLARI” MMC</b>, hər gün ibtidai məktəbdən universitetə qədər olan nəşrləri  genişləndirməyə və onları şagirdlərimizə və müəllimlərə təqdim etməyə davam edir.</p>
                        <p>Biz düşünürük ki, şagirdlərin təhsilinə kömək edən vasitələr şagirdə həqiqi mənada faydalı olmalı və təhsilindəki müvəffəqiyyətini artırmalıdır. Məktəbdəki uğuru ilə yanaşı, tələbə olmaq arzusunda da onları imtahanlarda ən yaxşı şəkildə dəstəkləməlidir. Bunlar nəzərə alınmaqla, şagirdlərin keyfiyyətli köməkçi resurslara ehtiyacı olduğunu tamamilə anlayırıq.</p>
                        <p>Bu prinsipi rəhbər tutub məktəb nəşriyyatına yenilik gətirərək, “Çinar Yayımları”, şagirdlərimizin müvəffəqiyyətini şagird və müəllim mərkəzli təhsil metodikası ilə artıraraq, müəllimlərimizə biliklərini şagirdlərə daha faydalı şəkildə çatdırmağa imkan verən yayım anlayışını inkişaf etdirmişdir.</p>
                        <p>Yaşadığımız 21-ci əsrdə informasiya əsrinin zirvəsindəyik. Elə buna görədir ki, müasir informasiya və texnologiya təhsili sistemlərinin əvəzsiz rolunu nəzərə alan Çinar yayımları, nəşrlərin məzmununu bu günə qədər keyfiyyəti ön planda tutaraq hazırlayır. Çinar yayımları, Təhsil və Tədris sahəsində, bütün yenilikləri izləyərək təcrübəli kadrların proqnozları ilə bütün bu dəyişiklikləri və inkişafları dəstəkləyərək öz nəşrlərində bunlara diqqət edərək təhsil sektoruna töhfəsini verməkdən fəxr duyur.</p>
                        <p>Hörmətlə: <b>“ÇİNAR YAYIMLARI” MMC-nin direktoru BƏHRAM ORUCLU</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Director End here -->
@endsection