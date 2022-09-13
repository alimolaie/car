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
<!--محصولات-->
<div class="container-fluid">
    <div class="row mt-1">
        <div class="col-lg-1 d-none d-lg-inline"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 d-inline-block">
            <div class="contentt">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="row my-5" style="direction:ltr;">
                            <div class="col-12 col-sm-6 col-md-6 mt-2 d-inline-block mb-2" style="direction:rtl;">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('uploads/products/'.$products->image)}}"  style="width:400px;height: 300px;align-items: center;display: block;text-align: center;" alt="Card image" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mt-2 d-inline-block mb-2" style="direction:rtl;">
                                <div class="row">
                                    <div class="qeymatpaye2 mx-3 mb-3">
                                        <p class="qeymatpaye3 my-2"> نام خودرو: {{$products->name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="qeymatpaye2 mx-3 mb-3">
                                        <p class="qeymatpaye3 my-2"> مدل : {{$products->model}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="qeymatpaye2 mx-3 mb-3">
                                        <p class="qeymatpaye3 my-2"> رنگ : {{$products->model}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="qeymatpaye2 mx-3 mb-3">
                                        <p class="qeymatpaye3 my-2"> قیمت : {{$products->price}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1 d-none d-lg-inline"></div>
    </div>
</div>
<!--قوتر-->
<footer class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row mt-3">
                    <div class="col-12 col-sm-4 d-inline-block">
                        <span>تلفن پشتیبانی: 0713000</span>
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

</body>

</html>
