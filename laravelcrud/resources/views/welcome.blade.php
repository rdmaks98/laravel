<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
        background-color: #e8e8e4;
    }

    .carousel-inner img {
        width: 100%;
        height: 480px;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .update {
        background: linear-gradient(to right, #43cae9 0%, #38f9d7 50%, #43cae9 100%);
        background-size: 223% auto;
        color: #fff;
        border: 0;
    }
    </style>
</head>

<body>
    <!-- header -->
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ecommerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">category</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @guest
                                @if (Route::has('login'))
                                <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @endif

                                @if (Route::has('register'))
                                <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li>
                                    <h4 class="dropdown-item">Welcome {{ Auth::user()->name }}</h4>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @endguest
                            </ul>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </main>


    <!-- sliders -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/collection/190727/1200x900" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/collection/190727/1201x900" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/collection/190727/1202x900" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- content -->
    <section class="my-5">
        <div class="container">
            <h1 class="text-center">How can we start business online</h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="{{ url('images/Credit card-amico.png') }}" class="img-fluid" />
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="mt-5 text-center">
                        <h3 class="p-5"> The future of designing starts here</h3>
                        <p class="p-2"> An open platform for presentations and content collaboration. Sign up to get
                            early access.Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, neque earum
                            ducimus ab praesentium consequuntur quidem nisi quis sed magni. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Optio mollitia distinctio eos hic cupiditate unde, modi
                            expedita quos corporis deleniti veritatis nostrum quod saepe porro deserunt officia
                            voluptas, tempora, placeat explicabo qui nisi. Consectetur officia ratione quam, ullam
                            temporibus voluptas?

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- specialization -->
    <section>
        <div class="container-fluid">
            <h1 class="text-center">Our Specilization</h1>
            <div class="card-body shadow p-5 bg-light rounded">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card bg-dark text-white">
                            <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Kids</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card bg-dark text-white">
                            <img src="https://picsum.photos/300/201" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Man</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card bg-dark text-white">
                            <img src="https://picsum.photos/300/203" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Woman</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- latest updates -->
    <section>
        <div class="container-fluid">
            <h1 class="text-center my-5">Latest update</h1>
            <div class="card-body shadow bg-light rounded">
                <div class="row p-5">
                    <div class="col-lg-6 col-md-6 col-12">
                        <h1 class="display-8">Get latest updates!</h1>
                        <p class="lead">We never spam your email
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mt-2">
                        <form action="">
                            <div class="form-group">
                                <input type="email" class="form-control rounded" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="entwr email">
                            </div>
                            <button type="submit" class="btn btn-info rounded-pill">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery -->
    <section>
        <div class=" container">
            <h1 class="text-center text-capitalize my-5">Gallary</h1>
            <hr class="w-25 mx-auto pt-5" />
            <div class="row">
                <div class="col-md-3 col-lg-3 col-12">
                    <img src="https://picsum.photos/300/202" class="mt-3 img-fluid" alt="" />
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <img src="https://picsum.photos/300/201" class="mt-3 img-fluid" alt="" />
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <img src="https://picsum.photos/300/200" class="mt-3 img-fluid" alt="" />
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <img src="https://picsum.photos/320/200" class="mt-3 img-fluid" alt="" />
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <img src="https://picsum.photos/310/200" class="mt-3 img-fluid" alt="" />
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <img src="https://picsum.photos/300/209" class="mt-3 img-fluid" alt="" />
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <img src="https://picsum.photos/300/220" class="mt-3 img-fluid" alt="" />
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <img src="https://picsum.photos/300/210" class="mt-3 img-fluid" alt="" />
                </div>

            </div>
        </div>

    </section>
    <!-- top brands -->
    <!-- <section>
        <div class="container-fluid">
            <h1 class="text-center my-5">Top Compnies</h1>
            <div class="card-body p-5 shadow bg-body rounded">
                <h1 class="text-hide"
                    style="background-image: url('https://getbootstrap.com/docs/4.6/assets/brand/bootstrap-solid.svg');height:50px;width:60px;">
                    Bootstrap</h1>
            </div>
        </div>
    </section>-->

    <!-- testimonial -->
    <section class="container-fluid">
        <h1 class="text-center mt-5">Testemonial</h1>
        <div class="row p-5">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://picsum.photos/300/232" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <hr class="w-50 mx-auto">
                        <h5 class="card-title text-center">Card title</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://picsum.photos/300/234" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <hr class="w-50 mx-auto">

                        <h5 class="card-title text-center">Card title</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://picsum.photos/300/239" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <hr class="w-50 mx-auto">

                        <h5 class="card-title text-center">Card title</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- contactus -->
    <div class="container-fluid">
        <h1 class="text-center my-5">Contact us</h1>
        <div class="card-body shadow bg-light rounded">
            <div class="row p-5">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="{{ url('images/Calling-pana.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12 mt-5">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="email" class="form-control rounded" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email address</label>
                            <input type="password" class="form-control rounded" id="exampleInputPassword1">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <section class="bg-dark mt-5 mb-0">
            <article class="text-center text-white">
                <h3 class="p-3 text-white">&copy copyright Ecommerce-2020</h3>
            </article>
        </section>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    </script>
</body>























</html>