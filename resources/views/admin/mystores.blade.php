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
                                @foreach(\App\Store::all() as $store)
                                    <tr>
                                        <th scope="row">{{$store->id}}</th>
                                        <th>{{$store->name}}</th>
                                        <td>{{$store->price}}</td>
                                        <td>
                                            <a class="btn btn-info" href="/stores/{{$store->id}}/edit">Edit</a>


                                                @if($store->suspended==0)
                                                <form method="post" action="/stores/suspend/{{$store->id}}">
                                                    @csrf
                                                    <input name="suspended" hidden value="1">
                                                    <button type="submit" class="btn btn-danger">suspend</button>
                                                </form>
                                                @else
                                                <form method="post" action="/stores/suspend/{{$store->id}}">
                                                    @csrf
                                                    <input  name="suspended" hidden value="0">
                                                    <button type="submit" class="btn btn-danger">unsuspend</button>
                                                </form>
                                                    @endif

                                        </td>
                                    </tr>
                                    {{--                                    @include('layouts.modal',['item'=>$store,'id'=>"{$store->id}",'method'=>'DELETE','action'=>'/products'])--}}
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