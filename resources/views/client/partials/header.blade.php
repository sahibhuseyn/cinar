<header class="header-three">
    <div class="header-top">
        <div class="container">
            <ul class="left">
                @foreach($settings as $setting)
                    <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Telefon : {{ $setting->phone }}</li>
                    <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> İş vaxtı : {{ $setting->work_hours }}</li>
                    <li><span><i class="fa fa-home" aria-hidden="true"></i></span> Ünvan : {{ $setting->address }}</li>
                @endforeach
            </ul>
            <ul class="right">
                @foreach($settings as $setting)
                    <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $setting->youtube }}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="main-menu">
        <nav class="navbar ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ url('/client/images/logo1.png') }}" alt="logo" class="img-responsive" style="width: 170px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Çinar<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">Haqqımızda</a></li>
                                <li><a href="director.html">Rəhbərlik</a></li>
                                <li><a href="#">Struktur Bölmələr</a></li>
                                <li><a href="logo.html">Loqo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nəşrlər<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Uşaq Ədəbiyyatı</a></li>
                                <li><a href="#">Məktəbəqədər</a></li>
                                <li><a href="#">İbtidai Siniflər</a></li>
                                <li><a href="#">Orta Siniflər</a></li>
                                <li><a href="#">Cavabları Yüklə</a></li>
                                <li><a href="#">Kataloq</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sınaq İmtahanım<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="exam.html">Oktyabr Seriyası</a></li>
                                <li><a href="#">Noyabr Seriyası</a></li>
                                <li><a href="#">Dekabr Seriyası</a></li>
                                <li><a href="#">Yanvar Seriyası</a></li>
                                <li><a href="#">Fevral Seriyası</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="news.html">Xəbərlər</a></li>
                                <li><a href="#">Elanlar</a></li>
                                <li><a href="#">Media təqib</a></li>
                                <li><a href="#">Foto</a></li>
                                <li><a href="#">Video</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Müraciət<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Vakansiya</a></li>
                                <li><a href="#">Təklif və İradlar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Əlaqə</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- header End here -->