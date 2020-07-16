@extends('layouts.app')

@section('content')

<div class="inner-block">
	<div class="col-md-12">
    <div class="card">
        <div class="card-header">Alphabet</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i>Back</button></a>
            <a href="{{ url('/admin/alphabet/' . $alphabet->id . '/edit') }}" title="Edit alphabet"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                    Edit</button></a>

            <form method="POST" action="{{ url('admin/alphabet' . '/' . $alphabet->id) }}" accept-charset="UTF-8"
                style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete alphabet"
                    onclick="sweetalertDelete({{$alphabet->id}})"><i class="fa fa-trash" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($alphabet->image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $alphabet->id }}</td>
                        </tr>
                        <tr>
                            <th> Letter </th>
                            <td style="font-size: 4em;"> {{ $alphabet->letter }} </td>
                        </tr>
                        <tr>
                            <th> Makharij </th>
                            <td> {{ $alphabet->name }} </td>
                        </tr>
                        <tr>
                            <th> Makharij </th>
                            <td> {{ $alphabet->getMakharij->name }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {{ $alphabet->description }} </td>
                        </tr>
                        <tr>
                            <th> Slug </th>
                            <td> {{ $alphabet->slug }} </td>
                        </tr>
                        <tr>
                            <th> Sound </th>
                            <td> {{ $alphabet->sound }} </td>
                            <td> 
                            	{{-- sound play btn--}}
                                    <a onClick="togglePlay()" title="alphabet sound">
                                        <audio id="alphaAudio" src="{{ asset(Storage::url($alphabet->sound))}}" preload="auto">
                                        </audio>
                                        <button
                                        class="btn btn-info btn-sm"><i class="fa fa-play"
                                            aria-hidden="true"></i></button>
                                            <script>
                                    function togglePlay() {
                                        var alphaAudio = document.getElementById("alphaAudio");
                                        console.log(alphaAudio);
                                      return alphaAudio.paused ? alphaAudio.play() : alphaAudio.pause();
                                    };
                                    </script>
                                    </a>

                                    {{-- sound play btn end--}} 
                                </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</div>

@endsection
