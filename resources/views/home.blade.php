@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Notícias RSS</div>

                <div class="panel-body">

                        @foreach ($items as $item)
                            <div class="item">
                                <h2><a href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a></h2>
                                <p>{{ strip_tags($item->get_description()) }}</p>
                                <p><small>Postado em {{ $item->get_date('j F Y | g:i a') }}</small></p>
                            </div>
                        @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
