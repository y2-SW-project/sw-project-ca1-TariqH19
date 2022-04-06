<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PRODUCT VIEW PAGE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--script type="text/javascript" src="{{ URL::asset('js/myScript.js') }}"></!--script-->

</head>

<body>

    <div id="app">

        <nav class="navbar navbar-expand-md bg-dark">
            <div class="container">
                <a class="navbar-brand btn text-light" href="{{ url('/') }}">
                    {{ config('app.name', 'Blazar') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a class="nav-link btn text-light" href="{{route('user.shoes.index')}}">Browse Shoes</a>
                        </li>
                        <li>
                            <a class="nav-link btn text-light" href="{{route('user.clothes.index')}}">Browse Clothes</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-white">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link btn text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">


            <h1 class="text-start fw-bolder">{{ $clothing->name }}</h1>

        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top img-fluid"
                            src="{{ URL::to('/assets/images/'.$clothing->image) }}" alt="..." /></a>
                    <div class="card-body">
                        <h2 class="card-title">{{ $clothing->name }}</h2>
                        <p class="card-text">{{ $clothing->description }}</p>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->

                <!-- Pagination-->

            </div>
            <!-- Side widgets-->

            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Sizes</div>
                    <div class="card-body">

                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-light btn-outline-dark">xs</button>
                                <button type="button" class="btn btn-light btn-outline-dark">s</button>
                                <button type="button" class="btn btn-light btn-outline-dark">m</button>
                                <button type="button" class="btn btn-light btn-outline-dark">l</button>
                                <button type="button" class="btn btn-light btn-outline-dark">xl</button>
                                <button type="button" class="btn btn-light btn-outline-dark">xxl</button>
                                <button type="button" class="btn btn-light btn-outline-dark">xxxl</button>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Buying</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Buy now</button>


                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Buy now</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <div><label for="recipient-name"
                                                                class="col-form-label">Price:</label></div>
                                                        <h5 class="btn btn-light">{{$clothing->price}}</h5>
                                                        <div><label for="recipient-name"
                                                                class="col-form-label">Shipping:</label></div>
                                                        <h5 class="btn btn-light">€15</h5>
                                                        <div><label for="recipient-name" class="col-form-label">Total
                                                                €420</label></div>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Card
                                                            details:</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Buy
                                                    Now</button>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                    aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Last Step</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <div><label for="recipient-name"
                                                                class="col-form-label">{{$clothing->name}}</label></div>
                                                        <h5 class="btn btn-light">Are you sure you want to buy this
                                                            product</h5>

                                                </form>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a class="btn btn-primary"
                                                    href="{{route('user.clothes.buy', $clothing->id)}}"
                                                    type="button">Buy now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">Bidding</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Bid now</button>


                            <div class="modal fade" id="exampleModal2" tabindex="-1"
                                aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Buy now</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <div><label for="recipient-name"
                                                            class="col-form-label">Price:</label></div>
                                                    <h5 class="btn btn-light">{{$clothing->price}}</h5>
                                                    <div><label for="recipient-name"
                                                            class="col-form-label">Shipping:</label></div>
                                                    <h5 class="btn btn-light">€15</h5>
                                                    <div><label for="recipient-name" class="col-form-label">Your
                                                            bid:</label></div>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Card
                                                        details:</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer ">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal3" data-bs-whatever="@mdo">Bid
                                                Now</button>


                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal3" tabindex="-1"
                                aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel3">Last Step</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <div><label for="recipient-name"
                                                            class="col-form-label">{{$clothing->name}}</label></div>
                                                    <h5 class="btn btn-light">Are you sure you want to bid on this
                                                        product</h5>

                                            </form>
                                        </div>
                                        <div class="modal-footer ">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a class="btn btn-success"
                                                href="{{route('user.clothes.bid', $clothing->id)}}" type="button">Bid
                                                now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side widget-->
        <div class="card mb-4">
            <div class="card-header">Selling</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal4" data-bs-whatever="@mdo">Sell now</button>


                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel4">Sell now</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <div><label for="recipient-name" class="col-form-label">Price:</label>
                                                </div>
                                                <h5 class="btn btn-light">{{$clothing->price}}</h5>
                                                <div><label for="recipient-name"
                                                        class="col-form-label">Shipping:</label></div>
                                                <h5 class="btn btn-light">€15</h5>
                                                <div><label for="recipient-name" class="col-form-label">Your
                                                        selling price:</label></div>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Account
                                                    details:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal5" data-bs-whatever="@mdo">Sell
                                            Now</button>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel5">Last Step</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <div><label for="recipient-name"
                                                        class="col-form-label">{{$clothing->name}}</label></div>
                                                <h5 class="btn btn-light">Are you sure you want to sell this
                                                    product</h5>

                                        </form>
                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <a class="btn btn-danger" href="{{route('user.clothes.sell', $clothing->id)}}"
                                            type="button">Sell
                                            now</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    <!-- Footer-->
    <footer class="container">
        <p>&copy; 2021-2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->

    <script type="text/javascript" src="{{ URL::asset('js/myScript.js') }}"></script>

    <!--script src="js/myScript.js"></!--script-->
</body>

</html>