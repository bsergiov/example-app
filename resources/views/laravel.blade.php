@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body mt-3 mb-3">
            <h5 class="card-title">list ul</h5>
            <ul class="list-group">
                @foreach($arrList as $list)
                <li class="list-group-item">{{$list}}</li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection
