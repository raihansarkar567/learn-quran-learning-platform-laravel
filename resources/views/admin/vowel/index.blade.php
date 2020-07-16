@extends('layouts.app',['pageTitle' => __('vowel Add')])
@section('content')

<div class="inner-block">


    @if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <div class="header-action">
                <a href="{{ url('/admin/vowel/create') }}" role="button" class="btn btn-primary"><i class="fa fa-plus mr-2"></i>Add</a>
            </div>
        </div>
    </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">vowel List</h3>
                <div class="card-options">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="search">
                            <span class="input-group-btn ml-2"><button class="btn btn-icon" type="submit"><span class="fa fa-search"></span></button></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-vcenter table-hover mb-0 text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Letter</th>
                                <th>Pronounced </th>
                                <th>name</th>
                                <th>type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vowel as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="font-size: 6em;">{{$item->letter}}</td>
                                <td>{{$item->pronounced}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->type}}</td>
                                <td>
                                    <img class="avatar avatar-sm" src="{{ asset(Storage::url($item->image))}}" data-toggle="tooltip" title="{{$item->name}}" data-original-title="Avatar Name"/>
                                </td>
                                <td>
                                    {{-- sound play btn--}}
                                    <a onClick="togglePlay{{$item->id}}()" title="vowel sound">
                                        <audio id="alphaAudio{{$item->id}}" src="{{ asset(Storage::url($item->sound))}}" preload="auto">
                                        </audio>
                                        <button
                                        class="btn btn-info btn-sm"><i class="fa fa-play"
                                            aria-hidden="true"></i></button>
                                            <script>
                                    function togglePlay{{$item->id}}() {
                                        var alphaAudio = document.getElementById("alphaAudio{{$item->id}}");
                                        console.log(alphaAudio);
                                      return alphaAudio.paused ? alphaAudio.play() : alphaAudio.pause();
                                    };
                                    </script>
                                    </a>

                                    {{-- sound play btn end--}}

                                    <a href="{{ url('/admin/vowel/' . $item->id) }}" title="View vowel"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                            aria-hidden="true"></i></button></a>

                                    <a href="{{ url('/admin/vowel/' . $item->id . '/edit') }}" title="Edit Class"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button></a>
                        <form method="POST" id="deleteButton{{$item->id}}"
                            action="{{ url('/admin/vowel' . '/' . $item->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete vowel"
                                onclick="sweetalertDelete({{$item->id}})"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>            
</div>

    
</div>


@endsection
