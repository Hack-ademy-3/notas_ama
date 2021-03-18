@extends("layouts.app")
@section("hueco")
<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2 pt-5">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      #{{$note->id}}|{{$note->title}}|{{$note->created_at}} 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        {{$note->content}}
      </div>
    </div>
  </div>
</div>
    </div>
</div>
@endsection