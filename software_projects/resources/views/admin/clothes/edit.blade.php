@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Edit Shoe
                </div>
                <div class="card-body">
                    <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.clothes.update', $clothing->id)}}">
                        <input type="hidden" name="_token" value="{{  csrf_token()  }}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $clothing->name) }}" />
                        </div>
                        <div class="form-group">
                            <labe for="location">price</labe`l>
                                <input type="text" class="form-control" id="price" name="price"
                                    value="{{ old('price', $clothing->price) }}" />
                        </div>
                        <div class="form-group">
                            <labe for="location">image</labe`l>
                                <input type="text" class="form-control" id="image" name="image"
                                    value="{{ old('image', $clothing->image) }}" />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                value="{{ old('description', $clothing->description) }}" />
                        </div>


                        <a href="{{ route('admin.clothes.index') }}" class="btn btn-outline">Cancel</a>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection