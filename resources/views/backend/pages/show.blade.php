@extends('backend.layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Devices</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('itemPost.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <td>Mac Address</td>
            <td><strong>{{ $item->mac }}</strong></td>
            <td>IP Address</td>
            <td><strong>{{ $item->ip }}</strong></td>
            <td>Definition</td>
            <td><strong>{{ $item->definition }}</strong></td>
            <td>Last Data</td>
            <td><strong>{{ $item->lastdata }}</strong></td>

        </tr>


    </table>
    <div class="container"><img class="img-responsive center-block" src="/img/temsa.png"> </div>

@endsection