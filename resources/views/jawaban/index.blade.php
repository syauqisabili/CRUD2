@extends('adminlte.master')
@section('content')
<!-- /.card-header -->
<div class="card-body">
    <h2>
        @if (!$items[0]->isEmpty())
            Pertanyaan {{$items[1]}}
        @endif

    </h2>
    <table class="table table-bordered">
      <thead>
        <tr>
            <th style="width: 10px">No</th>
            <th>Isi</th>
            <th>Tanggal Dibuat</th>
        </tr>
      </thead>
      <tbody>
          @if (!$items[0]->isEmpty())
            @foreach ($items[0] as $key => $item)
            <tr>
                <td> {{ $key+1 }} </td>
                <td> {{ $item->isi }} </td>
                <td> {{ $item->created_at }} </td>
            </tr>
            @endforeach
          @endif
      </tbody>
    </table>
    <div class="card card-warning mt-2">
        <!-- /.card-header -->
        <div class="card-body">
            <form role="form" action="/jawaban/{{$items[1]}}" method="POST">
                @csrf
                <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                    <label>Isi</label>
                    <textarea name="isi" class="form-control" rows="3" placeholder="Tulis Jawaban"></textarea>
                    </div>
                </div>

                </div>

                <button type="submit" class="btn btn-secondary">Buat Jawaban</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
