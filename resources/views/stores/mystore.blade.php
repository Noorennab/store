@extends('layouts.app')
@section('content')
    <section class="charts">
        <div class="container">
            <header>
                <h1 class="h3">All Products</h1>
            </header>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="10%">Name</th>
                                    <th> Price</th>
                                    <th width="20%">Actions</th>
                                    {{--<th width="10%">Buyer Name</th>--}}
                                    {{--<th width="10%">Delete</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Auth()->user()->products() as $product)
                                    <tr>
                                        <th scope="row">{{$product->id}}</th>
                                        <th>{{$product->brand->name}}</th>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <a class="btn btn-info" href="/products/edit">Edit</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#d{{$product->id}}">Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @include('layouts.modal',['item'=>$product,'id'=>"d{$product->id}",'method'=>'DELETE','action'=>''])
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @endsection