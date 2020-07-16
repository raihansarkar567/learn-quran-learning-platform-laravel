@extends('layouts.app')

@section('content')

<div class="inner-block">
	<div class="col-md-12">
    <div class="card">
        <div class="card-header">Letter Formation</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i>Back</button></a>
            <a href="{{ url('/admin/letter_formation/' . $letter_formation->id . '/edit') }}" title="Edit letter_formation"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                    Edit</button></a>

            <form method="POST" action="{{ url('admin/letter_formation' . '/' . $letter_formation->id) }}" accept-charset="UTF-8"
                style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete letter_formation"
                    onclick="sweetalertDelete({{$letter_formation->id}})"><i class="fa fa-trash" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $letter_formation->id }}</td>
                        </tr>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($letter_formation->detached_image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($letter_formation->initial_image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($letter_formation->medial_image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($letter_formation->final_image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th> Name </th>
                            <td> {{ $letter_formation->name }} </td>
                        </tr>
                        <tr>
                            <th> Type </th>
                            <td> {{ $letter_formation->type }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {{ $letter_formation->description }} </td>
                        </tr>
                        <tr>
                            <th> Sound </th>
                            <td> {{ $letter_formation->sound }} </td>
                            <td> 
                            	{{-- sound play btn--}}
                                    <a onClick="togglePlay()" title="letter_formation sound">
                                        <audio id="alphaAudio" src="{{ asset(Storage::url($letter_formation->sound))}}" preload="auto">
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
