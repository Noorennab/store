@extends('layouts.app')
@section('content')
<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">{{$store->name}} update </div>
        <div class="card-body">
            @include('layouts.alerts')

            <form method="post" action="/stores/update/{{$store->id}}">
                @csrf
                <div class="form-group">
                    <label for="store_name">Store Name</label>
                    <input  value="{{$store->name}}" class="form-control" id="store_name" name="name" type="text" aria-describedby="emailHelp" placeholder="Your store Name">
                </div>

                <div class="form-group">
                    <label for="phone">Phone No.</label>
                    <input   value="{{$store->phone}}" class="form-control" id="phone" name="phone" type="text" aria-describedby="emailHelp" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="fb_page">Facebook Page Link</label>
                    <input   value="{{$store->fb_page}}" class="form-control" id="fb_page" name="fb_page" type="text" placeholder="fb_page">
                </div>

                <div class="form-group">
                    <label for="fb_page">Your location</label>
                    <select name="store_locate" class="form-control">
                        <option value="dahra">الظهرة</option>
                        <option value="delshara3">شارع الظل</option>
                        <option value="zawiatadhmani">زاوية الدهماني</option>
                        <option value="nofliien">النوفليين</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block" >update</button>
            </form>
        </div>
    </div>
</div>

@endsection
