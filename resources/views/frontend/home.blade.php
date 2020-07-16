@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<!--inner block start here-->
<div class="inner-block">
   <div class="boost-icons">
           <div class="boost-icons-head">
                 <h2>Icons </h2>
          </div>
          <div class="boost-icons-bottom">
                <div class="boost-icons-list">
                    
                    <div class="clearfix">
                      <ul>
                        @foreach (App\Makharij::all() as $makharijItem)
                          <li style="float: right;">
                           <strong>{{$makharijItem->name}}</strong>
                           <ul>
                            @foreach (App\Alphabet::all() as $item)
                              @if ($item->getMakharij->name == $makharijItem->name)
                                <li style="float: right;">
                                <a onClick="togglePlay{{$item->id}}()" class="hvr-grow" style="font-size: 3em;">{{$item->letter}}
                                    <audio id="alphaAudio{{$item->id}}" src="{{ asset(Storage::url($item->sound))}}" preload="auto"></audio>
                                    <script>
                                        function togglePlay{{$item->id}}() {
                                            var alphaAudio = document.getElementById("alphaAudio{{$item->id}}");
                                            console.log(alphaAudio);
                                          return alphaAudio.paused ? alphaAudio.play() : alphaAudio.pause();
                                        };
                                    </script>
                                </a>
                                <p><strong>{{$item->name}}</strong></p>
                                <p>{{$item->getMakharij->details}}</p>
                                <a><i class="fa fa-eye alphabet-eye" aria-hidden="true"></i></a>
                            </li>
                              @endif
                            @endforeach
                            </ul>
                          </li>
                        @endforeach
                    </ul>
                    </div>
                </div>                  
            </div>              
     </div>
</div>
<!--inner block end here-->
@endsection