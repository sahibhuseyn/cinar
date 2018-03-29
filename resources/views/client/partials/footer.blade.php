<!-- Footer Start here -->
<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>&copy; {{ date('Y') }}. Developed & Designed By <a href="{{ route('index') }}">Çinar Yayımları</a></p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="social-default">
                        @foreach($settings as $settings)
                            <li><a target="_blank" href="{{ $settings->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="{{ $settings->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="{{ $settings->youtube }}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="page-scroll scroll-top" href="#scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Footer End here -->