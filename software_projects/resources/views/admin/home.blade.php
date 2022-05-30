@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in as admin user!
                    <li><a href="{{route('admin.shoes.index')}}">View all shoes</a></li>
                    <li><a href="{{route('admin.clothes.index')}}">View all clothes</a></li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection