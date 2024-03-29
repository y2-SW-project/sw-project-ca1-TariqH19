@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Add new Shoe
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
                    <form method="POST" action="{{ route('admin.shoes.store')  }}">
                        <input type="hidden" name="_token" value="{{  csrf_token()  }}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                        </div>
                        <div class="form-group">
                            <label for="location">price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{ old('price') }}" />
                        </div>

                        <div class="form-group">
                            <label for="location">image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                value="{{ old('image') }}" />
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                value="{{ old('description') }}" />
                        </div>


                        <a href="{{ route('admin.shoes.index') }}" class="btn btn-outline">Cancel</a>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection