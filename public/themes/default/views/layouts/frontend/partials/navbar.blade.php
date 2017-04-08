<div class="sixteen columns" id="jmenu">
    <a class="show-menu menu-head" href="#">মেনু নির্বাচন করুন</a>
    <div id="dawgdrops" role="navigation">
        <ul class="meganizr mzr-slide mzr-responsive">
            @foreach ($pages as $index=>$page)
                <li class="{{ 'col'.$index }}  {{ count($page->children) ? ($page->isChild() ? 'dropdown-submenu mzr-drop' : 'dropdown mzr-drop') : '' }}">
                    <a href="{{ url($page->uri) }}">
                        {{ $page->title }}
                        
                        @if(count($page->children))
                            <span class="caret"></span>
                        @endif
                    </a>

                    @if(count($page->children))
                        <ul class="dropdown-menu">
                            @include('partials.navbar', ['pages' => $page->children])
                        </ul>

                            <div class="mzr-content drop-one-columns">
                                <div class="one-col">
                                    <h6></h6>
                                    <ul class="mzr-links">
                                        @include('partials.navbar', ['pages' => $page->children])
                                    </ul>
                                </div>
                            </div>            
                    @endif      

                </li>
            @endforeach
        </ul>
    </div>
</div>

