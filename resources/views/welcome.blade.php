@extends('layouts.app')
@section('content')
<section class="container movie my-5">
    <div class="row g-5 justify-content-center">
        @foreach ($movies as $movie)
        <div class="movie_card col-md-4">
          <h2>
            {{$movie->title}}
          </h2>
          <h6>
            {{$movie->original_title}}
          </h6>
          <div class="more_info d-flex justify-content-between flex-wrap">
            <div class="col-12">
              <p class="text-muted">
                descrition: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsa, velit, autem minus assumenda commodi nesciunt iusto necessitatibus dolore aspernatur mollitia nisi itaque. Labore fuga officia exercitationem perferendis unde molestiae.
              </p>
            </div>
            <span>
              {{$movie->nationality}}
            </span>
            <span>
              {{$movie->date}}
            </span>
          </div>
        </div>     
        @endforeach
    </div>

</section>
@endsection