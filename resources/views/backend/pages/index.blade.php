@extends('backend.layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SmartTag Devices List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/admin"> Menu</a>
                <a class="btn btn-success" href="{{ route('itemPost.create') }}"> Yeni Cihaz Ekle</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Mac Address</th>
            <th>IP Address</th>
            <th>Definition</th>
            <th>Last Data</th>
            <th width="225px">Action</th>
        </tr>
        @foreach ($items as $key => $item)
            <tr>
                <td>{{ $item->mac }}</td>
                <td>{{ $item->ip }}</td>
                <td>{{ $item->definition }}</td>
                <td> {{ $item->lastdata }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('itemPost.show',$item->id) }}">Göster</a>
                    <a class="btn btn-primary" href="{{ route('itemPost.edit',$item->id) }}">Düzenle</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['itemPost.destroy', $item->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Sil', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


@endsection