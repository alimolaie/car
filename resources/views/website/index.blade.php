<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>خرید و فروش ماشین</title>
</head>

<body>

<!--منو-->
<div class="container-fluid navh">
    <div class="row">
        <div class="col-10 d-inline">
            <nav class="navbar navbar-expand-sm ">
                <button class="navbar-toggler " type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                    <i class="fa fa-bars" style="font-size:31px"></i>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}" style="color: white;">صفحه نخست</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navh" href="{{url('about-us')}}" style="color: white;">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navh" href="{{url('login')}}" style="color: white;">درباره ما</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!--عکس ماشین-->
<div class="container-fluid bg-dark">
    <p class=" w-100 text-center" style="color: white;height: 120px;padding-top: 25px;font-size: 40px;">{{$header->title}}</p>
</div>
<img src="{{asset('uploads/header/'.$header->image)}}" class="w-100 " style="height: 450px;margin-top: -30px;" alt="Card image" />

<div class="container mt-3">
    <div class="card" style="border: none;background-color: inherit;">
        <div class="card-header crdhedslide">
            <p class="d-inline-block mr-2 onvanslidmoz">محصولات جدید</p>
            <a href="">
            </a>
        </div>
        <div class="card-body" style="border: none;">
            <div class="items1" style="direction: ltr;">
                @foreach($products as $product)
                <a href="{{route('view.car',$product->id)}}" class="card" style="width:305px;">
                    <div class="cardheader" style="height: 230px;">
                        <div class="category">
                            <img src="{{asset('uploads/products/'.$product->image)}}" class="w-100 " style="height: 200px;" alt="Card image" />
                        </div>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-title">
                            <p>{{$product->name}}</p>
                        </h5>
                        <p class="card-text">{{\Morilog\Jalali\Jalalian::forge($product->created_at)->format('%B %d، %Y') }} </p>
                        <p>:قیمت پایه</p>
                        <div class="card-text">
                            <span class="d-inline-block">تومان</span>
                            <span class="d-inline-block"> {{$product->price}}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--قوتر-->
<footer class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row mt-3">
                    <div class="col-12 col-sm-4 d-inline-block">
                        <span>تلفن پشتیبانی: 071300000</span>
                    </div>
                    <div class="col-12 col-sm-8 d-inline-block">
                            <span>
                                هفت روز هفته، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم.
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hrftr" />
        <div class="row">
            <div class="col-6 col-sm-4">
                <ul>
                    <li>خدمات مشتری</li>
                    <li >رویه بازگرداندن کالا</li>
                    <li >پاسخ به سوالات متداول</li>
                    <li >شرایط استفاده</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--اسلایدمزایدات-->
<script>
    $(document).ready(function () {

        $('.items1').slick({
            dots: true,
            infinite: true,
            speed: 800,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    });
</script>
</body>

</html>
