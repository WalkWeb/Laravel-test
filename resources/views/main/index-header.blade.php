        @if(session('status'))
        <div class="content-section">
            <div class="container">
                <div class="heading-section col-md-12 text-center">
                    <br /><br /><br /><br /><br />
                    <h2>{{ session('status') }}</h2>
                </div>
            </div>
        </div>
        @endif
        @if(count($errors) > 0)
        <div class="content-section">
            <div class="container">
                <div class="heading-section col-md-12 text-center">
                    <br /><br /><br /><br /><br />
                    @foreach($errors->all() as $error)
                        <h2>{{ $error }}</h2><br />
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="site-main" id="sTop">
            @include('main.menu')
            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($slides as $slide)
                                <li>
                                    <div class="overlay"></div>
                                    <img src="{{ $slide['image'] }}" alt="">
                                    <div class="slider-caption visible-md visible-lg">
                                        <h2>{{ $slide['name'] }}</h2>
                                        <p>{{ $slide['description'] }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>