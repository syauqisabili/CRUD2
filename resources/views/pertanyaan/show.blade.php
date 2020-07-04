@extends('adminlte.master')

@section('content')
<div id="accordion" class="mt-3 mx-3">
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title w-100">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                {{$items->judul}}
            </a>
            </h4>
        </div>
        <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
            {{$items->isi}}
            </div>
        </div>
    </div>
    <a href="/pertanyaan/{{$items->id}}/edit" class="btn btn-primary mt-2">Edit Pertanyaan</a>
</div>

@endsection
