master.blade.php<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Admin Home
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  @include('layout.admin.css')
 
  

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="{{route('home')}}" class="simple-text logo-normal">
          Admin Home
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <?php  $a=session::get('active');

           ?>
          <?php if($a==1){ ?>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
        <?php } else { ?>
           <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
        <?php } ?> 
          <?php if($a==2){ ?>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('addinfo')}}">
             <i class="material-icons">person</i>
              <p>ADD POST OR VIDEO</p>
            </a>
          </li>
        <?php } else { ?>
           <li class="nav-item">
            <a class="nav-link" href="{{route('addinfo')}}">
             <i class="material-icons">person</i>
              <p>ADD POST OR VIDEO</p>
            </a>
          </li>
        <?php } ?> 
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      @include('layout.admin.sidenav')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          
        
        @yield('contact')
             
         

        </div>
      </div>
    
    </div>
  </div>
     @include('layout.admin.jquery')
 
</body>


</html>