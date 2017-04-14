<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Presenters
    |--------------------------------------------------------------------------
    |
    | Define your objects and their corrosponding presenters here to have them
    | automatically decorated when resolved in a view. The array key should
    | be your object and the value will be the presenter. Remember to use
    | the class names and not actual instances.
    |
    */

    Rocket\Models\Page::class => Rocket\Presenters\PagePresenter::class,
    
    Rocket\Models\Post::class => Rocket\Presenters\PostPresenter::class,

    Rocket\Models\Notice::class => Rocket\Presenters\NoticePresenter::class,
    
    Rocket\Models\News::class => Rocket\Presenters\NewsPresenter::class,


];
