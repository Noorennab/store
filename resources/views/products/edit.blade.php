@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3">

                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                    {{--<a href="#" class="list-group-item">Category 1</a>--}}
                    {{--<a href="#" class="list-group-item">Category 2</a>--}}
                    {{--<a href="#" class="list-group-item">Category 3</a>--}}
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <header>
                    <h1 class="h3">Edit Product</h1>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="form" method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name"
                                               class="col-md-2 col-form-label text-md-right">{{ __('Name') }}
                                        </label>
                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name"  value="{{$product->price}}" autofocus>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="branch_id"
                                               class="col-md-2 col-form-label text-md-right">Brand</label>
                                        <div class="col-md-6">
                                            <select id="brand_id"  name="brand_id" class="custom-select">
                                                <option disabled selected>Select Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}"
                                                            @if($brand->id ==  $product->brand->id)
                                                            selected
                                                            @endif
                                                    >{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('branch'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="model_id"
                                               class="col-md-2 col-form-label text-md-right">pay method</label>
                                        <div class="col-md-6">
                                            <select id="model_id"  name="type_id" class="custom-select">
                                                <option disabled selected>Select Brand</option>
                                                @foreach($types as $type)
                                                    <option value="{{$type->id}}"
                                                            @if($type->id == $product->type->id)
                                                            selected
                                                            @endif
                                                    >{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('model_id'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('model_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="color"
                                               class="col-md-2 col-form-label text-md-right">color</label>
                                        <div class="col-md-6">
                                            <select id="color" name="color_id" class="custom-select">
                                                <option disabled selected>Select color</option>
                                                @foreach($colors as $color)
                                                    <option value="{{$color->id}}"
                                                            @if($color->id == $product->color->id)
                                                            selected
                                                            @endif
                                                    >{{$color->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('color'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('color') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="color"
                                               class="col-md-2 col-form-label text-md-right">Status</label>
                                        <div class="col-md-6">
                                            <select id="status" name="status_id" class="custom-select">
                                                <option disabled selected>Select status</option>
                                                @foreach($statuses as $status)
                                                    <option value="{{$status->id}}"
                                                            @if($status->id == $product->status->id)
                                                            selected
                                                            @endif
                                                    >{{$status->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('status'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="capacity"
                                               class="col-md-2 col-form-label text-md-right">Capacity</label>
                                        <div class="col-md-6">
                                            <select id="size" name="size_id" class="custom-select">
                                                <option disabled selected>Select size</option>
                                                @foreach($sizes as $size)
                                                    <option value="{{$size->id}}"
                                                            @if($size->id == $product->size->id)
                                                            selected
                                                            @endif
                                                    >{{$size->value}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('size'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('size') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="purchase_price"
                                               class="col-md-2 col-form-label text-md-right"> Price</label>
                                        <div class="col-md-6">
                                            <input id="price" type="number"
                                                   class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                                   name="price"  value="{{$product->price}}" required>
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="purchase_price"
                                               class="col-md-2 col-form-label text-md-right"> Images</label>
                                        <div class="col-md-6">
                                            <input id="images" type="file"
                                                   class="form-control{{ $errors->has('images') ? ' is-invalid' : '' }}"
                                                   name="images[]"  multiple>
                                            @if ($errors->has('images'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('images') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm"
                                               class="col-md-2 col-form-label text-md-right">Notes</label>
                                        <div class="col-md-6">
                                        <textarea class="form-control"
                                                  name="notes">{{$product->Notes}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-2">
                                            <button type="submit" class="btn btn-primary">
                                               Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <a href="#"><img class="card-img-top" src="{{$product->getMedia('images')->first()->getUrl('thumb')}}" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-9 -->


        </div>
    </div>

@endsection
