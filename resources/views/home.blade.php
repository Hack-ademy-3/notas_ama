@extends("layouts.app")
@section("hueco")
<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2">
        <form action="{{route('notes.store')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo</label> 
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control @error('content') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="row pt-5">
@foreach($notes as $note)
    <div class="col-12 col-lg-4 pb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$note->title}}</h5>
                <h6>{{$note->user->name}}</h6>
                <p class="card-text">{{$note->content}}</p>
                <a href="{{route('notes.show', ['id'=>$note->id])}}" class="card-link">Detalle</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
 @endforeach   
</div>


@endsection
