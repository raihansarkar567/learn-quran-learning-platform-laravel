@extends('layouts.app',['pageTitle' => __('letter_formation Add')])
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
                <a href="{{ url('/admin/letter_formation/create') }}" role="button" class="btn btn-primary"><i class="fa fa-plus mr-2"></i>Add</a>
            </div>
        </div>
    </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">letter_formation List</h3>
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
                                <th>Detached</th>
                                <th>Initial </th>
                                <th>Medial</th>
                                <th>Final</th>
                                <th>Name</th>
                                <th>type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($letter_formation as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img width="100px" class="avatar avatar-sm" src="{{ asset(Storage::url($item->detached_image))}}" data-toggle="tooltip" title="{{$item->name}}" data-original-title="Avatar Name"/>
                                </td>
                                <td>
                                    <img width="100px" class="avatar avatar-sm" src="{{ asset(Storage::url($item->initial_image))}}" data-toggle="tooltip" title="{{$item->name}}" data-original-title="Avatar Name"/>
                                </td>
                                <td>
                                    <img width="100px" class="avatar avatar-sm" src="{{ asset(Storage::url($item->medial_image))}}" data-toggle="tooltip" title="{{$item->name}}" data-original-title="Avatar Name"/>
                                </td>
                                <td>
                                    <img width="100px" class="avatar avatar-sm" src="{{ asset(Storage::url($item->final_image))}}" data-toggle="tooltip" title="{{$item->name}}" data-original-title="Avatar Name"/>
                                </td>
                                
                                <td>{{$item->name}}</td>
                                <td>{{$item->type}}</td>
                                <td>
                                    {{-- sound play btn--}}
                                    <a onClick="togglePlay{{$item->id}}()" title="letter_formation sound">
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

                                    <a href="{{ url('/admin/letter_formation/' . $item->id) }}" title="View letter_formation"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                            aria-hidden="true"></i></button></a>

                                    <a href="{{ url('/admin/letter_formation/' . $item->id . '/edit') }}" title="Edit Class"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button></a>
                        <form method="POST" id="deleteButton{{$item->id}}"
                            action="{{ url('/admin/letter_formation' . '/' . $item->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete letter_formation"
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
