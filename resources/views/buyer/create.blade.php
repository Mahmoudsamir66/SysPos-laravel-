@extends('SysPos.Layout.master')
@section('content')
    @include('SysPos.Alert.success')
    @include('SysPos.Alert.Error')
    <form class="form-horizontal" action="{{ route('buyer.store') }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        <div class="form-body">
            <h4 class="form-section">
                <i class="icon-user"></i> seller Details</h4>


            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput2"> product: </label>
                <select name="product_id">
                    <option value="">choose product Type</option>
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                @error('product_id')
                <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput2">type of product: </label>
                <select name="kind_id">
                    <option value="">choose product Type</option>
                    @foreach($kinds as $kind)
                        <option value="{{$kind->id}}">{{$kind->type}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput2"> product store: </label>
                <select name="store_id">
                    <option value="">choose product store</option>
                    @foreach($stores as $store)
                        <option value="{{$store->id}}">{{$store->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput2">name of buyer: </label>
                <div class="col-md-9">
                    <input type="text" name="name" id="projectinput2" class="form-control">
                </div>
                @error('name')
                <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>


            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput4">count </label>
                <div class="col-md-9">
                    <input type="text" name="count" id="projectinput4" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput4">price </label>
                <div class="col-md-9">
                    <input type="text" name="money" id="projectinput4" class="form-control">
                </div>
            </div>


            <div class="form-group row">
                <button type="submit" class="btn btn-primary">Create</button>

            </div>
        </div>


    </form>
    <div>
        <a href="{{route('buyer.create')}}" class="btn btn-danger">Back to List</a>
    </div>


    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">?????? ????????????</th>

            <th scope="col">?????? ??????????</th>

            <th scope="col">?????? ????????????</th>
            <th scope="col"> ????????????</th>
            <th scope="col">??????????</th>
            <th scope="col"> ?????? ??????????????</th>
            <th scope="col">?????????? ????????????</th>

        </tr>
        </thead>
        <tbody>
        @foreach($buyers as  $key=>$buyer)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$buyer->stores->name}}</td>
                <td>{{$buyer->kinds->type}}</td>
                <td>{{$buyer->products->name}}</td>
                <td>{{$buyer->count}}</td>
                <td>{{$buyer->money}}</td>
                <td>{{$buyer->name}}</td>
                <td>{{$buyer->created_at}}</td>


                <td>
                    <a href="{{route('buyer.Edit',$buyer->id)}}" class="btn btn-warning"><i
                            class="far fa-edit ml-1"></i>?????????? </a>
                    <a type="submit" href="{{route('buyer.delete',$buyer->id)}}"
                       class="btn btn-danger" onclick="return confirm('???? ?????? ?????????? ???? ?????? ?????? ????????????')"><i
                            class="fas fa-trash-alt ml-1"></i></i>?????? </a>
                </td>
            </tr>
            <tr>
        @endforeach
        </tbody>
    </table>



    </section>

@endsection
