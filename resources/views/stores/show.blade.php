@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <div class="list-group">
                    <a href="{{$store->id}}" class="list-group-item active">{{$store->name}}</a></a>
                    <a href="{{$store->fb_bage}}" class="list-group-item ">Facebook Page</a></a>
                    <a href="#" class="list-group-item">Location: {{$store->location}}</a>
                    <a href="#" class="list-group-item">Phone: {{$store->phone}}</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">


                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        {{--<div class="carousel-item active">--}}
                        {{--<img class="d-block img-fluid" src="{{$products->last()->getMedia('images')->first()->getUrl()}}" alt="First slide">--}}
                        {{--</div>--}}
                        {{--@php($products->pop())--}}
                        {{--<div class="carousel-item">--}}
                        {{--<img class="d-block img-fluid" src="{{$products->last()->getMedia('images')->first()->getUrl()}}" alt="Second slide">--}}
                        {{--</div>--}}
                        {{--@php($products->pop())--}}
                        {{--<div class="carousel-item">--}}
                        {{--<img class="d-block img-fluid" src="{{$products->last()->getMedia('images')->first()->getUrl()}}" alt="Third slide">--}}
                        {{--</div>--}}

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    @foreach($store->products as $product)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="{{$product->getMedia('images')->first()->getUrl('thumb')}}" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="/products/{{$product->id}}">{{$product->name}}</a>
                                    </h4>
                                    <h5>${{$product->price}}</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
                <!-- /.row -->


            </div>
            <!-- /.col-lg-9 -->

        </div>

    </div>
@endsection
