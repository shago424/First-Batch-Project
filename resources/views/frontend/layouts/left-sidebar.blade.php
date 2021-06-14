<div class="col-sm-3" style="" >

     <div class="panel panel-primary" id="result_panel" style="margin-top: 0;background-color:  #eef2f7 ;border: 1px solid gray;">
        <div class="panel-heading bg-warning"style=" 
;color: black"><h5 style="padding: 15px" class="panel-title">Recent Notice  </h5>
              </div>
             <div class="panel-body" style="background-color:  #eef2f7 ;height: 100px">

                <ul style="list-style: none;" >
                 <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">  
                 @foreach($recents as $recent)      
                <li ><a style="text-decoration: none;" href="{{ route('post.details',$recent->id) }}"><i class="fa fa-angle-right"></i>  {{ $recent->post_title }}</a></li>
                @endforeach
            </ul>
          </marquee>
          </div>

          <div class="panel-footer"style=" 
;color: black;border-radius: none"> <a class="btn btn-primary"  href="{{ route('post.all.recent') }}" style="padding: 7px;padding-bottom: 7px;width: 100%;" class="panel-title">See All Notice </a>
              </div>
          </div>




            <div class="panel panel-primary mt-2" id="result_panel" style="margin-top: 0;background-color:  #eef2f7 ;border: 1px solid gray;">
        <div class="panel-heading bg-warning"style=" 
;color: black"><h5 style="padding: 15px" class="panel-title text-center">Admission Notice  </h5>
              </div>
             <div class="panel-body" style="background-color:  #eef2f7 ;height: 100px">

                <ul style="list-style: none;" >
                 <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()"> 
                 @foreach($admissions as $admission)       
                <li ><a style="text-decoration: none;" href="{{ route('post.details',$admission->id) }}"><i class="fa fa-angle-right"></i>  {{ $admission->post_title }}</a></li> 
                @endforeach    
                  
                            
            </ul>
          </marquee>
          </div>

          <div class="panel-footer"style=" 
;color: black;border-radius: none"> <a class="btn btn-primary"  href="{{ route('post.all.admission') }}" style="padding: 7px;padding-bottom: 7px;width: 100%;" class="panel-title">See All Notice </a>
              </div>
          </div>

          {{-- Exam Notice --}}
           <div class="panel panel-primary mt-2" id="result_panel" style="margin-top: 0;background-color:  #eef2f7 ;border: 1px solid gray;">
        <div class="panel-heading bg-warning"style=" 
;color: black"><h5 style="padding: 15px" class="panel-title text-center"> Exam Notice  </h5>
              </div>
             <div class="panel-body" style="background-color:  #eef2f7 ;height: 100px">

                <ul style="list-style: none;" >
                 <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()"> 
                 @foreach($exams as $exam)       
                <li ><a style="text-decoration: none;" href="{{ route('post.details',$exam->id) }}"><i class="fa fa-angle-right"></i>  {{ $exam->post_title }}</a></li> 
                @endforeach    
                  
                            
            </ul>
          </marquee>
          </div>

          <div class="panel-footer"style=" 
;color: black;border-radius: none"> <a class="btn btn-primary"  href="" style="padding: 7px;padding-bottom: 7px;width: 100%;" class="panel-title">See All Notice </a>
              </div>
          </div>
   
   {{-- End Exam --}}

    {{-- Result Notice --}}
           <div class="panel panel-primary mt-2" id="result_panel" style="margin-top: 0;background-color:  #eef2f7 ;border: 1px solid gray;">
        <div class="panel-heading bg-warning"style=" 
;color: black"><h5 style="padding: 15px" class="panel-title text-center"> Result Notice  </h5>
              </div>
             <div class="panel-body" style="background-color:  #eef2f7 ;height: 100px">

                <ul style="list-style: none;" >
                 <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()"> 
                 @foreach($results as $result)       
                <li ><a style="text-decoration: none;" href="{{ route('post.details',$result->id) }}"><i class="fa fa-angle-right"></i>  {{ $result->post_title }}</a></li> 
                @endforeach    
                  
                            
            </ul>
          </marquee>
          </div>

          <div class="panel-footer"style=" 
;color: black;border-radius: none"> <a class="btn btn-primary"  href="" style="padding: 7px;padding-bottom: 7px;width: 100%;" class="panel-title">See All Notice </a>
              </div>
          </div>
   
   {{-- End Result --}}
   


<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-danger" class="notice" style="color: white">
    Notice Panel
  </div>
  <a style="width: 100%" class="btn btn-success text-left" href="">Recent Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">All Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Admission Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Exam Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Result Notice</a>
 
</div>

<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-primary" class="notice" style="color: white">
    Gallery
  </div>
  <ul class="list-group list-group-flush">
    <li style="background-color: red;" class="list-group-item"><a style="text-decoration: none;color: white" href="">Photo Gallery</a></li>
   <li style="background-color: red;margin-top:5px" class="list-group-item"><a style="text-decoration: none;color: white" href="">Event Gallery</a></li>
   <li style="background-color: red;margin-top:5px" class="list-group-item"><a style="text-decoration: none;color: white" href="">Video Gallery</a></li>
  

  </ul>
</div>








  </div>