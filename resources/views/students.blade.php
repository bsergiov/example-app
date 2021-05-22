@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Students</h1>
        </div>
        <div class="card-body mt-3 mb-3">
            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item">Студент {{$student->first_name}} {{$student->last_name}}, группа {{$student->group_number}} </li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection
