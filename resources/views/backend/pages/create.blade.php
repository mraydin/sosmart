@extends('backend.layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Yeni Cihaz Ekle</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('itemPost.index') }}"> Geri</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Girdinizde bazı problemler olabilir...<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'itemPost.store','method'=>'POST')) !!}
    <div class="row">æ

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mac Address:</strong>
                {!! Form::text('mac', null, array('placeholder' => 'Mac Address','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IP Address:</strong>
                {!! Form::text('ip', null, array('placeholder' => 'IP Address','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Definition:</strong>
                {!! Form::textarea('definition', null, array('placeholder' => 'Definition','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Data:</strong>
                {!! Form::text('lastdata', null, array('placeholder' => 'Last data','class' => 'form-control')) !!}
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection