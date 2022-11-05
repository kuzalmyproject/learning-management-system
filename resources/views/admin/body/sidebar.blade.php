<!--sidebar start-->


@php
$prefix= Request::route()->getPrefix();
$route=Route::current()->getName();


@endphp
<aside>
@php
				$adminData = DB::table('admins')->first();
        @endphp
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="{{route('admin.profile.view')}}"><img src="{{ (!empty($adminData->profile_photo_path))? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/images.png')}}" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">{{$adminData->name}}</h5>
              	  	
                  

                  <li class="mt">
                  <a class="{{ ($route=='dashboard')? 'active':''}}" href="{{url('admin/dashboard')}}">

                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="mt">
                  <a class="{{ ($prefix=='/faculty')? 'active':''}}" href="{{route('admin.addfaculty')}}">

                          <i class="fa fa-building"></i>
                          <span>Add Faculty</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="{{ ($prefix=='department')? 'active':''}}" href="{{route('admin.adddepartment')}}">
                      <i style='font-size:24px' class='fas'>&#xf51c;</i>
                      <span>Add  Departmen5t</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                  <a class="" href="">

                          <i class="fa fa-desktop"></i>
                          <span>Add Teacher</span>
                      </a>
                      <ul class="sub">
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->