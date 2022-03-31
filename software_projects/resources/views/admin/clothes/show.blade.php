@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Shoe: {{ $clothing->name }}
                </div>
                <div class="card-body">
                    <table id="table-clothes" class="table table-hover">
                        <tbody>
                            <tr>
                                <td>name</td>
                                <td>{{ $clothing->name }}</td>
                            </tr>
                            <tr>
                                <td>price</td>
                                </td>
                                <td>{{ $clothing->price }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $clothing->description }}</td>
                            </tr>

                        </tbody>
                    </table>

                    <a href="{{ route('admin.clothes.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection