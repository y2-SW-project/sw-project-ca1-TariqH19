@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Shoe: {{$shoe->name}}</div>

                <div class="card-body">
                        <table id="table-shoes" class="table table-hover">
                            <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{$shoe->name}}</td>
                            </tr>
                            <tr>
                                <td>Shoe</td>
                                <td>{{$shoe->price}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{$shoe->description}}</td>
                            </tr>

                        </tbody>
                        </table>
                        <a href="{{route('user.shoes.index')}}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
