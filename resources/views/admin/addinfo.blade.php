@extends('layout.admin.master')
@section('contact')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script>
      $(document).ready(function(){
    $('.alert-warning').fadeIn().delay(2000).fadeOut(2000);
      });
  </script>
<div class="container">
  <div class="wrapper">
         <div class="col-md-12">

         	  @if ($errors->any())
        	<div class="alert alert-warning">
       			 <ul>
           			 @foreach ($errors->all() as $error)
              			  <li>{{ $error }}</li>
           			 @endforeach
        		</ul>
       		 </div>
     		 @endif
                  <form action="{{route('save')}}" method="post" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                          <label >Select Type</label>
                          <select name="type" id="type" class="form-control d_type_class">
                            <option>select</option>
                          	<option value="1">Post</option>
                          	<option value="2">Video</option>
                          </select>
                         </div>
                        </div>
                     </div>

                     <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label >Select Section</label>
                           <select name="section" id="section" class="form-control">
                          	<option value="1">Section 1</option>
                          	<option value="2">Section 2</option>
                          </select>
                          </div>
                        </div>
                      </div>
         
                    <div class="row">
                        <div class="col-md-8">
                         <div class="form-group">
                           <label class="">Title</label>
                           <br>
                           <input type="text" id="title" name="title" class="form-control">
                        </div>
                       </div>
                      </div>
                       <div class="row d_type1" id="showhide1" style="display: none;">
                       	<div class="col-md-4">
                       		<label>Select Image</label>
                       	 <div class="col-md-8">
                       		<input type="file" id="image" name="image" class="form-control-sm">
                        </div>
                       </div>
                      </div>
                      <br>
                        <div class="row d_type2" id="showhide2" style="display: none;">
                        <div class="col-md-8">
                         <div class="form-group">
                           <label class="">Input Video URL From Youtube</label>
                           <br>
                           <input type="text" id="url" name="url" class="form-control">
                        </div>
                       </div>
                      </div>
                    <div class="row">
                       <div class="col-md-8">
                        <div class="form-group">
                          <label >Details</label>
                          <br>
                           <textarea name="details" id="details" class="form-control" rows="5"></textarea>
                         </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label >Select Section</label>
                           <select name="status" id="status" class="form-control">
                          	<option value="1">Publish</option>
                          	<option value="2">Unpublish</option>
                          </select>
                        </div>
                        </div>
                      </div>

                    <button type="submit" class="btn btn-primary pull-left">Submit</button>
                  </form>
                </div>
            </div>
        </div>


<script type="text/javascript">
$(document).ready(function(){
    $('.d_type_class').on('change', function() {
      if ( this.value == '2')
      //.....................^.......
      {
        $(".d_type2").show();
        $(".d_type1").hide();
      }
      else
      {
        $(".d_type2").hide();
         $(".d_type1").show();
      }
      if ( this.value == '1')
      //.....................^.......
      {
        $(".d_type1").show();
        $(".d_type2").hide();
      }
      else
      {
        $(".d_type1").hide();
         $(".d_type2").show();
      }
    });
});
</script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
	@if(Session::has('message'))
		var type="{{Session::get('alert-type','info')}}"

		switch(type){
			case 'info':
		         toastr.info("{{ Session::get('message') }}");
		         break;
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	case 'warning':
	            toastr.warning("{{ Session::get('message') }}");
	            break;
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
	@endif

	console.log(type);
</script>

@endsection