<!-- Banner Start here -->
<section class="banner_slider">
    <div class="container pl_0 pr_0">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($sliders as $count => $slider)
                    <li data-target="#myCarousel" data-slide-to="{{ $count }}" class="{{ $count == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>


            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                @foreach($sliders as $count => $slider)
                    <div class="item {{ $count == 0 ? 'active' : '' }}">
                        <img src="{{ url('/uploads/'.$slider->image) }}" alt="" style="width:100%;">
                        <div class="carousel-caption">
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- Banner End here -->
