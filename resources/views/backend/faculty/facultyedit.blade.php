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
          	<h3><i class="fa fa-angle-right"></i> Faculty Info</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Faculty  Details</h4>
                        <form class="form-horizontal style-form"method="post" action="{{ route('faculty.update',$faculty->id) }}">
  @csrf
                              
  <input type="hidden" name="id" value="{{ $faculty->id}}">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Faculty Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="fname" value="{{$faculty->faculty_name}}" class="form-control round-form">
                              </div>
                              @error('fname')
                              <span style="margin:auto; display:table; color:red">

{{ $message }}</span>
					@enderror

                    <label class="col-sm-2 col-sm-2 control-label">Faculty  Id</label>
                              <div class="col-sm-10">
                                  <input type="text" name="fid" value="{{$faculty->faculty_id}}" class="form-control round-form">
                              </div>
                              @error('fid')
                              <span style="margin:auto; display:table; color:red">
{{ $message }}</span>
                              
@enderror
                          </div>
                        

                          

                          
                          <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Faculty">

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