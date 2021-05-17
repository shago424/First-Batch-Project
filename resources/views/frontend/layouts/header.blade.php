 <div class="container" style="background-color:  #eefcf8 ">

 <div class="header-part" style="height: 150px">
  <img src="{{ asset('upload/logoimage/')}}/{{ $logo->image }}" style="width: 100%;height: 150px">
  </div>
<!-- ---------------Nav Bar------- -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fa fa-home"></i> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="font-size: 20px;" class="nav-link" href="{{ route('frontend-home') }}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="font-size: 20px;" class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a style="font-size: 20px;" style="font-size: 20px;" class="nav-link" href="#">Contac Us</a>
      </li>
      <li class="nav-item dropdown">
        <a style="font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Notice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a style="font-size: 20px;" class="dropdown-item" href="#">All</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Recent</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Admission</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Exam</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Result</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a style="font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Class
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a style="font-size: 20px;" class="dropdown-item" href="#">One</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Two</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Admission</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Exam</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Result</a>
        </div>
      </li>
      <li class="nav-item">
        <a style="font-size: 20px;" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
