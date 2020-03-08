@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Information <i class="fa fa-info"></i></div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>State</th>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{$dt->name}}</td>
                            <td>{{$dt->email}}</td>
                            <td>{{$dt->address}}</td>
                            <td>{{$dt->state->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
