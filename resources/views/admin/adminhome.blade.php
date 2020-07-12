@extends('layout.admin.master')
@section('contact')
<div class="container">
  <div class="wrapper">
         <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Information</h4>
                  <p class="card-category"> Post Information</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                     <table id="infolog_table" class="table table-light" >
                      <thead class=" text-primary">
                        <th>Type</th>
                        <th>Section</th>
                        <th>Titile</th>
                        <th>Image Or Video Thumbnail</th>
                        <th>Details</th>
                        <th>Status</th>
                      </thead>
                      <tbody>
                        @foreach($data as $row)
                        <tr>
                          <?php if($row->type==1){ ?>
                          <td>Post</td>
                          <?php } else { ?>
                          <td>Video</td>
                          <?php } ?>
                          <?php if($row->section==1){ ?>
                          <td>Section 1</td>
                          <?php } else { ?>
                          <td>Section 2</td>
                           <?php } ?>
                          <td>{{$row->title}}</td>
                          <?php if($row->image!=null){ ?>
                          <td><img src="{{URL::to($row->image)}}" style="width: 100px; height: 100px;"></td>
                          <?php } 
                            else { ?>
                          <td><img src="https://img.youtube.com/vi/{{$row->url}}/hqdefault.jpg" style="width: 100px; height: 100px;"></td>
                          <?php }?>
                          <td>{{$row->details}}</td>
                          <?php if($row->status==1){ ?>
                          <td>Published</td>
                          <?php } else { ?>
                          <td>Unpublished</td>
                           <?php } ?>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
 
 </div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js
"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js
"></script>


<script type="text/javascript">
    $(document).ready(function() {
    $('#infolog_table').DataTable();  
} );
</script>

@endsection