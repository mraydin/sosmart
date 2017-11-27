@extends('backend.layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SmartTag</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('itemPost.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <td>Giriş</td>
            <td>Çıkış</td>
            <td>Toplam</td>

        </tr>

        <tr>
            <td><strong>{{ $upcnt }}</strong></td>
            <td><strong>{{ $downcnt }}</strong></td>
            <td><strong>{{ $upcnt - $downcnt }} </strong></td>
        </tr>


    </table>

@endsection