@extends('client.layout.layout')

@section('facebook')

{{--facebook code content --}}

<meta property="og:url"           content="https://cinaryayimlari.com/{{ $post->slug }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $post->title }}" />
<meta property="og:description"   content="{{ $post->sub_title }}" />
<meta property="og:image"         content="https://cinaryayimlari.com/uploads/{{ $post->image }}" />

{{--facebook code content --}}

@endsection

@section('fb_js')

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

@endsection

@section('head_js')
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
@endsection


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
                                    <li><a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a> -</li>
                                @endforeach
                            </ul>


                            <ul class="post-share">
                                <li><span class="flaticon-share"></span> Share :</li>
                                <li class="fb-share-button" data-href="http://cinaryayimlari.com/" data-layout="button" data-size="small" data-mobile-iframe="true">
                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcinaryayimlari.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li><a href="https://plus.google.com/share?url=cinaryayimlari.com/posts/{{ $post->slug }}" onclick="window.open(this.href, 'Google+', 'width=490,height=530'); return false;">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <h3 class="sidebar-title">All Categories</h3>

                            <ul class="sidebar-categories">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('category', $category->slug) }}">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            {{ $category->name }} <span>{{ count($category->posts()) }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <h3 class="sidebar-title">Latest Blog Post</h3>

                            <ul class="sidebar-posts">
                                @foreach($latests as $latest)
                                    <li>
                                        <div class="image">
                                            <a href="{{ route('post_single', $latest->slug) }}"><img src="{{ url('/uploads/'.$latest->image) }}" alt="post image" class="img-responsive"></a>
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
                                @foreach($tags as $tag)
                                    <li><a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Post End here -->

@endsection