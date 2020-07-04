@extends('adminlte.master')
@section('content')

    <!-- /.card-header -->
    <div class="card-body">
        <h2> Pertanyaan </h2>
        <table class="table table-bordered">
          <thead>
            <tr>
                <th style="width: 10px">No</th>
                <th>Judul Pertanyaan</th>
                <th>Tanggal Dibuat</th>
                <th>Actions</th>
                <th>Result</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($items as $key => $item)
              <tr>
                  <td> {{ $key+1 }} </td>
                  <td> {{ $item->judul }} </td>
                  <td> {{ $item->created_at }} </td>
                  <td> <a href="/pertanyaan/{{$item->id}}" class="btn btn-info">Show</a> </td>
                  <td> <a href="/jawaban/{{$item->id}}" class="btn btn-secondary">Jawaban</a> </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        <a href="/pertanyaan/create" class="btn btn-primary mt-2">Buat Pertanyaan</a>
    </div>


@endsection
