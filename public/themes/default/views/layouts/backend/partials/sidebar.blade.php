<aside class="main-sidebar hidden-print">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>

<!--         <p class="designation">Visit Site</p>
 -->
      </div>
    </div>
    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">
      <li class="active"><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
      <li><a href="{{ route('backend.categories.index') }}"><i class="fa fa-crosshairs"></i><span>Categories</span></a></li>
      <li class="treeview"><a href="#"><i class="fa fa-file-text-o"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ route('backend.pages.create') }}"><i class="fa fa-circle-o"></i> Create Page</a></li>
          <li><a href="{{ route('backend.pages.index') }}"><i class="fa fa-circle-o"></i> All pages</a></li>
        </ul>
      </li> 
      <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Posts</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ route('backend.posts.create') }}"><i class="fa fa-circle-o"></i> Create Post</a></li>
          <li><a href="{{ route('backend.posts.index') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
        </ul>
      </li> 
      <li class="treeview"><a href="#"><i class="fa fa-newspaper-o"></i><span>News</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ route('backend.news.create') }}"><i class="fa fa-circle-o"></i> Create News</a></li>
          <li><a href="{{ route('backend.news.index') }}"><i class="fa fa-circle-o"></i> All News</a></li>
        </ul>
      </li>      

      <li class="treeview"><a href="#"><i class="fa fa-bullhorn"></i><span>Notices</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ route('backend.notices.create') }}"><i class="fa fa-circle-o"></i> Create Notice</a></li>
          <li><a href="{{ route('backend.notices.index') }}"><i class="fa fa-circle-o"></i> All Notices</a></li>
        </ul>
      </li>                


      <li class="treeview"><a href="#"><i class="fa fa-user-md"></i><span>Adminstrations</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ route('backend.adminstrations.create') }}"><i class="fa fa-circle-o"></i> Create One</a></li>
          <li><a href="{{ route('backend.adminstrations.index') }}"><i class="fa fa-circle-o"></i> All adminstrations</a></li>
        </ul>
      </li>  

    </ul>
  </section>
</aside>