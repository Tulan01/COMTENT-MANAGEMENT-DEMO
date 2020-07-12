@extends('layout.frontpages.master')
@section('contact')
 <style type="text/css">
.clsFirstImg{
  width: 100%;
  position: relative;
  top: 0;
  left: 0;
}
.clsSecondImg {
  width: 30%;
  position: relative;
  top: -50px; 
  left: 110px;
}
</style>
 <style type="text/css">
.clsFirstImg1{
  width: 100%;
  position: relative;
  top: 0;
  left: 0;
}
.clsSecondImg1 {
  width: 30%;
  position: relative;
  top: -100px; 
  left: 230px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<br>
<div class="container">
	<div class="row">
	<div class="col-md-8">
		<div class="row">
		
		<div class="col-md-6">
			 <?php if($data->type==1) { ?>
			<div class="card" style="width: 20rem;">
  			<a href="{{URL::to('viewsingle').$data->id}}"><img class="card-img-top" src="{{URL::to($data->image)}}" alt="Card image cap"></a>
  			<div class="card-body">
   			 <h5 class="card-title">{{$data->title}}</h5>
  			</div>
		   </div>
		    <?php } else { ?>
		    <div class="card" style="width: 20rem;">
  			<a href="{{URL::to('viewsingle').$data->id}}"><img class="card-img-top clsFirstImg1" src="https://img.youtube.com/vi/{{$data->url}}/hqdefault.jpg" alt="Card image cap"></a>
  			<a href="{{URL::to('viewsingle').$data->id}}"><img class="clsSecondImg1" src="002.png"></a>
  			<div class="card-body">
   			 <h5 class="card-title">{{$data->title}}</h5>
  			</div>
		   </div>
		     <?php } ?>
		</div>
		<div class="col-md-6">
		<div class="row">
			<?php $count=1; ?>
		@foreach($data1 as $row)
		    <?php  
		   if($count!=1){?>
		   <div class="col-md-6">
		   <?php if($row->type==1) { ?>
		   	<div class="card" style="width: 10rem;">
  			<a href="{{URL::to('viewsingle').$row->id}}"><img class="card-img-top" src="{{URL::to($row->image)}}"></a>
  			<div class="card-body">
   			 <h8 class="card-title">{{$row->title}}</h8>
  			</div>
		   </div>	    
		   <?php } else { ?>
		   	<div class="card" style="width: 10rem;">
  			<a href="{{URL::to('viewsingle').$row->id}}"><img class="card-img-top clsFirstImg" src="https://img.youtube.com/vi/{{$row->url}}/hqdefault.jpg"></a>
  			<a href="{{URL::to('viewsingle').$row->id}}"><img class="clsSecondImg" src="002.png"></a>
  			<div class="card-body">
   			 <h8 class="card-title">{{$row->title}}</h8>
  			</div>
		   </div>     
            <?php } ?>
		    </div>
	    <?php } $count=$count+1; 
	     ?>
	   @endforeach
		</div>	
	</div>
</div>
</div>

	<div class="col-md-4">
	 <div class="row">
	 	<?php $count=1; ?>
		@foreach($data2 as $row2)
		    <?php  
		   if($count==1){?>
	 	<div class="col-md-12">
	 		<?php if($row2->type==1) { ?>
	 		<div class="card" style="width: 20rem;">
  			<a href="{{URL::to('viewsingle').$row2->id}}"><img class="card-img-top" src="{{URL::to($row2->image)}}" alt="Card image cap"></a>
  			<div class="card-body">
   			 <h8 class="card-title">{{$row2->title}}</h8>
  			</div>
		   </div>
		    <?php } else { ?>
		    <div class="card" style="width: 20rem;">
  			<a href="{{URL::to('viewsingle').$row2->id}}"><img class="card-img-top clsFirstImg1" src="https://img.youtube.com/vi/{{$row2->url}}/hqdefault.jpg" alt="Card image cap"></a>
  			 <a href="{{URL::to('viewsingle').$row2->id}}"><img class="clsSecondImg1" src="002.png"></a>
  			<div class="card-body">
   			 <h8 class="card-title">{{$row2->title}}</h8>
  			</div>
		   </div> 
		    <?php } ?>
	 	</div>
	 	<?php $count=$count+1; }  
	 	else {?>
	 	<div class="col-md-6">
	 		 <?php if($row2->type==1) { ?>
		   	<div class="card" style="width: 10rem;">
  			<a href="{{URL::to('viewsingle').$row2->id}}"><img class="card-img-top" src="{{URL::to($row2->image)}}"></a>
  			<div class="card-body">
   			 <h8 class="card-title">{{$row2->title}}</h8>
  			</div>
		   </div>	    
		   <?php } else { ?>
		   	<div class="card" style="width: 10rem;">
  			<a href="{{URL::to('viewsingle').$row2->id}}"><img class="card-img-top clsFirstImg" src="https://img.youtube.com/vi/{{$row2->url}}/hqdefault.jpg" alt="Card image cap"></a>
  			 <a href="{{URL::to('viewsingle').$row2->id}}"><img class="clsSecondImg" src="002.png"></a>
  			<div class="card-body">
   			 <h8 class="card-title">{{$row2->title}}</h8>
  			</div>
		   </div>     
            <?php } ?>
	 	</div>
	 	<?php } ?>
	 	@endforeach
	 </div>
	</div>

	</div>
</div>
@endsection