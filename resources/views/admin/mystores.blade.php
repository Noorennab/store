@extends('layouts.app')
@section('content')
    <section class="charts">
        <div class="container">
            <header>
                <h1 class="h3">All Stores</h1>
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
                                        <th>{{$product->name}}</th>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <a class="btn btn-info" href="/products/{{$product->id}}/edit">Edit</a>
                                            {{--<button type="button" class="btn btn-danger" data-toggle="modal"--}}
                                            {{--data-target="#{{$product->id}}">Delete--}}
                                            {{--</button>--}}
                                            <form method="post" action="/products/{{$product->id}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{--                                    @include('layouts.modal',['item'=>$product,'id'=>"{$product->id}",'method'=>'DELETE','action'=>'/products'])--}}
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