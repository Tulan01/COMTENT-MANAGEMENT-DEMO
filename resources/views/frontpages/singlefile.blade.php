@extends('layout.frontpages.master')
@section('contact')
<style type="text/css">
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
</style>
  <br>

   <div class="container">
   	  <?php if($data->type==1){ ?>

   	<div class="card" style="width: 25rem;">
    <img class="card-img-top" src="{{URL::to($data->image)}}" >
    <div class="card-body">
    <h5 class="card-title">Title : {{$data->title}}</h5>
    <p class="card-text">{{$data->details}}</p>
   </div>
   </div>
   <?php } else { ?>
     <div class="card" style="width: 25rem;">
    <iframe width="420" height="345" src="https://www.youtube.com/embed/{{$data->url}}">
    </iframe>
    <div class="card-body">
    <h5 class="card-title">Title : {{$data->title}}</h5>
    <p class="card-text">{{$data->details}}</p>
   </div>
   </div>
<?php } ?>
</div>

@endsection