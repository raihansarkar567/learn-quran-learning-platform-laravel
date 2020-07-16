@extends('layouts.app')

@section('content')
<div class="inner-block">
   
    
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Edit Letter Formation</div>
        <div class="card-body">
            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <br />
            <br />

            @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ url('/admin/letter_formation/' . $letter_formation->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                @include ('admin.letter_formation.form', ['formMode' => 'edit'])

            </form>

        </div>
    </div>
</div>
    
</div>



@endsection
