<?php
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>

        <div class="row thumbnail">
          @foreach($movie as $movies)
            <div class="col-lg-3 thumbnail">
                <a href="{{ route('movies.show', $movies->id)}}">
                    <img class="img-rounded" style="width:300px; height:200px; " src="images/{{ $movies->id}}.{{ $movies->poster}}" alt="">
                <h3>
                {{ $movies->name}}
                </h3>
                </a>
                <h4>
                  {{ $movies->year}}
                </h4>
            <h5>
              Producer: {{ $movies->producer_name}}
            </h5>
            <h5>
              Cast:
            </h5>
              <ul>
                @foreach($casts as $castss)
                @if($castss->movie_id == $movies->id)
                  <li> {{ $castss->cast_name}}</li>
                @endif
                @endforeach
              </ul>
                <a href="{{ route('movies.edit', $movies->id)}}">
                <button href="{{ route('movies.edit', $movies->id)}}" type="button" class="btn btn-primary">Edit</button></a> 
                <button class="btn btn-danger" data-movid="{{$movies->id}}" data-posid="{{$movies->poster}}" data-toggle="modal" data-target="#delete">Delete</button>
            </div>
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row thumbnail">';
?>
          @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12" style="text-align: center;">
              {{ $movie->links() }}
            </div>
        </div>        