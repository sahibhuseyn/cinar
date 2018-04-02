@extends('client.layout.layout')
@section('content')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>{{ $post->title }}</h3>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>-</li>
                    <li>{{ $post->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End here -->

    <!-- Blog Post Start here -->
    <section class="blog-post padding-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-post">
                        <div class="post-image">
                            <img src="{{ url('/uploads/'.$post->image) }}" alt="{{ $post->title }}" class="img-responsive">
                        </div>
                        <div class="post-content">
                            <h3>{{ $post->title }}</h3>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-people-1"></span> <a href="#">{{ $post->author }}</a></li>
                            </ul>
                            <p>{!! $post->body !!}</p>
                        </div>
                        <div class="content-bottom">
                            <ul class="post-tags">
                                <li><span class="flaticon-tags-outline"></span> Tags :</li>
                                @foreach($post->tags as $tag)
                                    <li><a href="#">{{ $tag }}</a> -</li>
                                @endforeach
                            </ul>
                            <ul class="post-share">
                                <li><span class="flaticon-share"></span> Share :</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <h3 class="sidebar-title">All Categories</h3>

                            <ul class="sidebar-categories">
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> school <span>05</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> kindergarden <span>27</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> kids <span>07</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> school <span>05</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> kindergarden <span>27</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> kids <span>07</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> school <span>05</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> kindergarden <span>27</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> kids <span>07</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <h3 class="sidebar-title">Latest Blog Post</h3>

                            <ul class="sidebar-posts">
                                @foreach($latests as $latest)
                                    <li>
                                        <div class="image">
                                            <a href="{{ route('post_single', $latest->slug) }}"><img src="images/blog/latest_post_01.jpg" alt="post image" class="img-responsive"></a>
                                        </div>
                                        <div class="content">
                                            <a href="{{ route('post_single', $latest->slug) }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                                            <span>{{ Carbon\Carbon::parse($post->updated_at)->formatLocalized('%d %B %Y') }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <h3 class="sidebar-title">Latest Tags</h3>

                            <ul class="sidebar-tags">
                                <li><a href="#">sinif</a></li>
                                <li><a href="#">mekteb</a></li>
                                <li><a href="#">ibtidai</a></li>
                                <li><a href="#">kitab</a></li>
                                <li><a href="#">sinif</a></li>
                                <li><a href="#">mekteb</a></li>
                                <li><a href="#">ibtidai</a></li>
                                <li><a href="#">kitab</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Post End here -->

@endsection