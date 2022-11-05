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
          	<h3><i class="fa fa-angle-right"></i> Department Info</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Faculty  Details</h4>
                        <form class="form-horizontal style-form"method="post" action="{{route('department.store')}}" enctype="multipart/form-data">
  @csrf
                              
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Department</label>
                              <div class="col-sm-10">
                                  <input type="text" name="department" value="" class="form-control round-form">
                              </div>
                              @error('department')
                              <span style="margin:auto; display:table; color:red">

{{ $message }}</span>
					@enderror


                    <label class="col-sm-2 col-sm-2 control-label">Department_Code</label>
                              <div class="col-sm-10">
                                  <input type="text" name="department_id" value="" class="form-control round-form">
                              </div>
                              @error('department_id')
                              <span style="margin:auto; display:table; color:red">

{{ $message }}</span>
					@enderror

                    <label class="col-sm-2 col-sm-2 control-label">Faculty  </label>
                              <div class="col-sm-10">
                                  <select name="faculty_id" value="" class="form-control round-form">
                                  <option value="" selected="" disabled="">Select Faculty</option>
                                  @foreach($faculties as $faculty)
                                  <option value="{{$faculty->id}}">{{$faculty->faculty_name}}</option>
@endforeach
</select>
                              </div>
                              @error('faculty_id')
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
          	
          	<div class="row mt">
              <div class="col-lg-12">

                      <div class="form-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> View Departments</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Faculty Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Department Id</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Department</th>

                                  
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                @foreach($departments as $department)
                              <tr>
                                  <td><a href=""></a>{{$department['faculty']['faculty_name']}}</td>
                                  <td class="hidden-phone">{{$department->department_id}}</td>
                                  <td class="hidden-phone">{{$department->department_name}}</td>

                                  <td>
                                     <a href="" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="" class="btn btn-danger btn-xs" id="delete" ><i class="fa fa-trash-o "></i></a>
                                  </td>
                              </tr>
                              @endforeach

                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
     
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
   
   
</script>

   
  
		
@endsection