@extends('client.layout.layout')
@section('content')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <h3>Xəbərlər</h3>
                <ul>
                    <li><a href="{{ route('index') }}">Əsas Səhifə</a></li>
                    <li>-</li>
                    <li>Xəbərlər</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End here -->
    <!-- Blog Post Start here -->
    <section class="blog-post padding-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 post-item-pagination">
                    <div class="post-items">
                        @foreach($posts as $post)
                            <div class="post-item">
                                <div class="post-image">
                                    <a href="{{ route('post_single', $post->slug) }}">
                                        <img src="{{ url('/uploads/'.$post->image) }}" alt="{{ $post->title }}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h3><a href="{{ route('post_single', $post->slug) }}">{{ $post->title }}</a></h3>
                                    <ul class="post-meta">
                                        <li>
                                            <span class="icon flaticon-people-1"></span>
                                            <a href="#">{{ $post->author }}</a>
                                        </li>
                                    </ul>
                                    <p>{{ str_limit($post->sub_title, 250) }}</p>
                                    <a href="{{ route('post_single', $post->slug) }}" class="button-default post-button">Read More</a>
                                </div>
                            </div>

                        @endforeach
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
                {{ $posts->links() }}
            </div>
        </div>
    </section>
    <!-- Blog Post End here -->

@endsection