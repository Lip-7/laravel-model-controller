<div class="card border-0">
    <img src="{{$image}}" class="card-img-top" alt="{{$title}}">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white">{{$title}}</h5>
      <p class="card-text">{{$original_title}}</p>
      <a href="{{route('movies.show', ['id' => $id])}}" class="btn btn-warning">Check more infos</a>
    </div>
  </div>
