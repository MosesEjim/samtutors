<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="" class="navbar-brand-img" alt="...">
          <h3><b>GST ADMIN</b></h3>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="examples/dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Users</span>
              </a>
              <ul id="user" class="collapse">
                  <li class="">
                      <a class="nav-link" href="">
                        <i class="ni bullet-list-67 text-primary"></i>
                        <span class="nav-link-text">All Users</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="nav-link" href="">
                        <i class="ni fat-add text-primary"></i>
                        <span class="nav-link-text">Add A User</span>
                      </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link dropdown-btn" data-toggle="collapse" href="#article" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <i class="ni ni-ruler-pencil text-primary"></i>
                <span class="nav-link-text">Articles</span>
              </a>
              <ul id="article" class="collapse">
                  <li class="">
                      <a class="nav-link" href="{{route('post.index')}}">
                        <i class="ni bullet-list-67 text-primary"></i>
                        <span class="nav-link-text">All Articles</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="nav-link" href="{{route('post.create')}}">
                        <i class="ni fat-add text-primary"></i>
                        <span class="nav-link-text">Add An Article</span>
                      </a>
                  </li>
                  
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#message" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <i class="ni ni-note-03 text-primary"></i>
                <span class="nav-link-text">Courses</span>
              </a>
              <ul id="message" class="collapse">
                  <li class="">
                      <a class="nav-link" href="{{route('course.index')}}">
                        <i class="ni bullet-list-67 text-primary"></i>
                        <span class="nav-link-text">All Courses</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="nav-link" href="{{route('course.create')}}">
                        <i class="ni fat-add text-primary"></i>
                        <span class="nav-link-text">Add A Course</span>
                      </a>
                  </li>
                  
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#gallery" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <i class="ni ni-album-2 text-primary"></i>
                <span class="nav-link-text">Tutors</span>
              </a>
              <ul id="gallery" class="collapse">
                  <li class="">
                      <a class="nav-link" href="{{route('tutor.index')}}">
                        <i class="ni bullet-list-67 text-primary"></i>
                        <span class="nav-link-text">All Tutors</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="nav-link" href="{{route('tutor.create')}}">
                        <i class="ni fat-add text-primary"></i>
                        <span class="nav-link-text">Add A Photo</span>
                      </a>
                  </li>
                  
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#event" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <i class="ni ni-key-25 text-primary"></i>
                <span class="nav-link-text">Testimonies</span>
              </a>

              <ul id="event" class="collapse">
                  <li class="">
                      <a class="nav-link" href="{{route('testimony.index')}}">
                        <i class="ni bullet-list-67 text-primary"></i>
                        <span class="nav-link-text">All Testimonies</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="nav-link" href="{{route('testimony.create')}}">
                        <i class="ni fat-add text-primary"></i>
                        <span class="nav-link-text">Add A Testimony</span>
                      </a>
                  </li>
                  
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>