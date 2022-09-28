@extends('SysPos.Layout.master');
@section('content')

    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="content-header">Add Employees Form</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title" id="horz-layout-basic">Employee Information</h4>
                        </div>
                        <p class="mb-0">This is the basic horizontal form with labels on left and cost estimation form is the default position.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">
                            @include('SysPos.Alert.success')
                            @include('SysPos.Alert.Error')
                            <form  class="form-horizontal" action="{{ route('buyer.Update',$buyer->id) }}" method="POST"
                                   enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="icon-user"></i> Personal Details</h4>
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-md-3 label-control" for="projectinput2">name of product: </label>--}}
{{--                                        <select name="product_id" >--}}
{{--                                            <option value="">choose product name</option>--}}
{{--                                            @foreach($products as $product)--}}
{{--                                                <option value="{{$product->id}}" @if($buyer->product_id == $product->id) selected @endif>{{$product->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">name of product: </label>
                                        <select name="product_id" >
                                            <option value="">choose product name</option>
                                            @foreach($products as $product)
                                                <option value="{{$product->id}}" @if($buyer->product_id == $product->id) selected @endif>{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">type of product: </label>
                                        <select name="kind_id" >
                                            <option value="">choose product Type</option>
                                            @foreach($kinds as $kind)
                                                <option value="{{$kind->id}}" @if($buyer->kind_id == $kind->id) selected @endif>{{$kind->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2"> product store: </label>
                                        <select name="store_id">
                                            <option value="">choose product store</option>
                                            @foreach($stores as $store)
                                                <option value="{{$store->id}}"@if($buyer->store_id == $store->id) selected @endif>{{$store->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">count: </label>
                                        <div class="col-md-9">
                                            <input type="text" name="count" value="{{$buyer->count}}"  id="projectinput2" class="form-control" >
                                        </div>
                                    </div><div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">name of buyer: </label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" value="{{$buyer->name}}"  id="projectinput2" class="form-control" >
                                        </div>
                                    </div><div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">price: </label>
                                        <div class="col-md-9">
                                            <input type="text" name="money" value="{{$buyer->money}}"  id="projectinput2" class="form-control" >
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <button type="submit" class="btn btn-primary">save</button>

                                    </div>
                                </div>


                            </form>
                            <div>
                                <a href="{{route('buyer.create')}}" class="btn btn-danger" >Back to List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
