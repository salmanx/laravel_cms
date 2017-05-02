
<div class="sixteen columns">
    <div class="callbacks_container" style="box-shadow: 0 1px 5px #999999;">
        <ul class="rslides" id="front-image-slider">
        @foreach(Rocket\Models\Slider::all() as $slider)
            <li><img alt="" height="220" src="/sliders/{{ $slider->name }}" width="960"></li>
        @endforeach 
        </ul>
        <style>
        </style>
        <script>
        </script>
    </div>
    <div class="header-site-info" id="header-site-info">
        <div>
            <div id="logo">
                <a href="/fs/" title="Home"><img alt="Home" src="/fs/themes/responsive_npf/img/logo/logo.png"></a>
            </div>
            <style>
            @media screen and (min-width: 800px) {
            #logo {
               display: inline-block !important;
               float: left
            }
            #site-name-wrapper {
               line-height: 2
            }
            }
            </style>
            <div class="clearfix" id="site-name-wrapper">
                <span id="site-name"><a href="/fs/" title="Home">বাংলাদেশ ফায়ার সার্ভিস ও সিভিল ডিফেন্স অধিদপ্তর</a></span> <span id="slogan">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
            </div><!-- /site-name-wrapper -->
        </div><!-- /header-site-info-inner -->
    </div>
</div>

