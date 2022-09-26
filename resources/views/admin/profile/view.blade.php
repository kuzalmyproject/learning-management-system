@extends('admin.admin_master')
@section('admin')





  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
     
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Admin Info</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Personal Deatails</h4>
                        <form class="form-horizontal style-form"method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
  @csrf
                              
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="name" value="{{$adminData->name}}" class="form-control round-form">
                              </div>
                              @error('name')
                              <span style="margin:auto; display:table; color:red">
{{ $message }}</span>
					@enderror
                              
                          </div>
                        

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="email" name="email" value="{{$adminData->email}}" class="form-control round-form">
                              </div>
                              @error('email')
                              <span style="margin:auto; display:table; color:red">
{{ $message }}</span>
					@enderror
                            
                          </div>
                          

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Profile Photo</label>
                              <div class="col-sm-5">
                                  <input type="file" name="profile_photo_path" id="profile_photo_path" class="form-control round-form">
                              </div>

                          </div>
                          <input type="submit" class="btn btn-rounded btn-primary mb-5" value="update">

                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	<!-- INLINE FORM ELELEMNTS -->
              <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Change Password</h4>
                      <form class="form-horizontal style-form" method="post" action="{{route('admin.password.update')}}">
@csrf
                              
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Current Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="oldpassword" class="form-control round-form">
                              </div>
                              @error('oldpassword')
                              <span style="margin:auto; display:table; color:red">
{{ $message }}</span>
					@enderror
                          </div>

                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">New Password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password"class="form-control round-form">
                              </div>
                              @error('password')
                              <span style="margin:auto; display:table; color:red">
{{ $message }}</span>
					@enderror
                          </div>

                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Confirm New password</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password_confirmation" class="form-control round-form">
                              </div>
                              
                          </div>
                          <input type="submit" class="btn btn-rounded btn-primary mb-5" value="update">

                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	<!-- INPUT MESSAGES -->
          	
          	
		</section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
     
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
   
   
</script>

   
  
		
@endsection