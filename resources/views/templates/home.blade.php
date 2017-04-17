<div class="twelve columns" id="left-content">
<div class="row mainwrapper">
    <div class="row" id="notice-board">
        <div class="notice-board-bg">
            <h2>নোটিশ বোর্ড</h2>
            <div id="notice-board-ticker">
                <ul>
                    @foreach($notices as $notice)
                        <li>
                            <a href="{{ route('notice.details', ['id' => $notice->id, 'slug' => $notice->slug]) }}">{{ str_limit($notice->title, 80) }}</a>
                        </li>
                    @endforeach 
                </ul><a class="btn right" href="{{ route('all.notices') }}">সকল</a>
            </div>
        </div>
    </div>
    <style>
    #notice-board-ticker ul li{
    list-style:none;
    }
    </style>
    <script>
    </script>
    <div class="row" id="news" style=" background-color: #EFEFEF;border: 1px solid #CCCCCC;margin: 20px 0;padding: 10px;">
        <h5 style="float:left;margin:-3px 5px 0 0; font-weight:bold;font-size:.9em">খবর:</h5>
        <div id="news-ticker" style="overflow: hidden; position: relative; height: 0px;">
            <ul style="font-size: 0.9em; position: absolute; margin: 0px; padding: 0px; width: 95%;">

            @foreach($news as $index => $n)
                <li>
                    <a href="{{ route('news.details', ['id' => $n->id, 'slug' => $n->slug]) }}">{{ str_limit($n->title, 100) }}</a> <i>({{ $n->publishedDate() }})</i>
                </li>
            @endforeach    
            </ul>
            <div style="float:right">
                <a class="btn" href="{{ route('all.news') }}">সকল</a>
            </div>
        </div>
    </div>
    <style>
    </style>
    <script>
    </script>

    <div class="row">
        @foreach($categories as $category)
            <div class="six columns service-box box" style="margin: 5px;">
                <h4>{{ $category->title }}</h4>
                <img alt="" height="" src="/upload/category/{{$category->image ? $category->image :  'unnamed.png' }}" width="110">
                <ul class="caption fade-caption" style="margin:0">
                   @foreach($category->posts as $index => $post)
                        @if(($post->status == 1 && $post->published_at < Carbon\Carbon::now() &&  $index < 4) )
                        <li>
                            <a href="{{ route('post.details', ['id' => $post->id, 'slug' => $post->slug]) }}">
                                {{ str_limit($post->title, 25) }} 
                            </a>
                        </li>                        
                        @endif
                   @endforeach
                </ul>
            </div>
        @endforeach

    </div>

    <style>
    </style>
    <script>
    </script>
</div>
</div>
<div class="four columns right-side-bar" id="right-content">
    @include('templates/partials/right_sidebar')

</div>