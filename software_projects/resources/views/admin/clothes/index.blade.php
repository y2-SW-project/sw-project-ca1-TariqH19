@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Courses
                    <a href="{{ route('admin.clothes.create') }}" class="btn btn-primary float-right">Add</a>
                </div>
                <div class="card-body">
                    @if (count($clothes)=== 0)
                    <p>There are no Shoes!</p>
                    @else
                    <table id="table-clothes" class="table table-hover">
                        <thead>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Description</th>

                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($clothes as $clothing)
                            <tr data-id="{{ $clothing->id }}">
                                <td>{{ $clothing->name }}</td>
                                <td>{{ $clothing->price }}</td>
                                <td>{{ $clothing->description }}</td>


                                <td>
                                    <a href="{{ route('admin.clothes.show', $clothing->id) }}"
                                        class="btn btn-primary">View</a>
                                    <a href="{{ route('admin.clothes.edit', $clothing->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST"
                                        action="{{ route('admin.clothes.destroy', $clothing->id) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection