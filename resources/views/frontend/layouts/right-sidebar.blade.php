
   <div class="col-sm-3" style="">
   @foreach($principals as $principal)
   <div class="card" style="width:100%;height: 330px;border-radius: none;;">
  <img class="card-img-top pt-2" src="{{ asset('upload/principalimage/')}}/{{ $principal->image }} " alt="Card image" height="180px">
  <div class="card-body" style="background-color:  #fbe6e3 ">
    <h4 class="card-title">{{ $principal->degi }}</h4>
    <p style="padding: 0">{{ $principal->name }}</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
@endforeach



<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-success" class="notice" style="color: white">
   Emergency Website Link
  </div>
  <a style="width: 100%" class="btn btn-warning text-left" href="">SHED</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">DSHE</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">NU</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">Rajshahi Board</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">EMIS Cell</a>
 
</div>

<div class="card mt-2">
  <div class="fb-page" data-href="https://www.facebook.com/SsbLearningInstitute" data-tabs="timeline" data-width="" data-height="350px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SsbLearningInstitute" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SsbLearningInstitute">SSB Learning Institute - এসএসবি লার্নিং ইন্সটিটিউট</a></blockquote></div>
  
</div>

  </div>