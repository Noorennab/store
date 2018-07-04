<div class="col-lg-3">

    {{--<div class="list-group">--}}
    <form action="/search" method="get" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading"> phone name  <input style="margin: 10px 0px "  class="js-example-basic-single form-control" id="name1" type="text" placeholder="search"> </div>

        <div class="panel-body">

                <div class="form-group">
                    <label for="model">Brand</label>
                    <select class="js-example-basic-single form-control" name="brand_id">
                        <option value={{null}}>all</option>
                        @foreach(\App\Brand::all()  as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="km">pay Method</label>
                    <select class="js-example-basic-single form-control" name="type_id">
                        <option value={{null}}>all</option>
                        @foreach(\App\Type::all() as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">

                    <label for="status"> Color</label>
                    <select class="js-example-basic-single form-control" name="color_id">
                        <option value={{null}}>all</option>
                        @foreach(\App\Color::all() as $color)
                            <option value="{{$color->id}}">{{$color->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="status"> status</label>
                    <select class="js-example-basic-single form-control" name="status_id">
                        <option value={{null}}>all</option>
                        @foreach(\App\Status::all() as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Size</label>
                    <select class="js-example-basic-single form-control" name="size_id">
                        <option value={{null}}>all</option>
                        @foreach(\App\Size::all() as $size)
                            <option value="{{$size->id}}">{{$size->value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="first_bid">Price</label>
                    <input name="from" type="number" class="form-control" id="first_bid" placeholder="from">
                    <input name="to" type="number" class="form-control" id="first_bid" placeholder="to">
                </div>

                <hr>
                <hr>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div>
    </div>


</div>
{{--</div>--}}