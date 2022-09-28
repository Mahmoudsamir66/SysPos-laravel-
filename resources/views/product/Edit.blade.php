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
                            <form  class="form-horizontal" action="{{ route('product.Update',$product->id) }}" method="POST"
                                   enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="icon-user"></i> Personal Details</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Name of product: </label>
                                        <div class="col-md-9">
                                            <input name="name" value="{{$product->name}}" type="text" id="projectinput1" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">type of product: </label>
                                        <select name="type" >
                                            <option value="">choose product Type</option>
                                            @foreach($kinds as $kind)
                                                <option value="{{$kind->id}}" @if($product->kind_id == $kind->id) selected @endif>{{$kind->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2"> product store: </label>
                                        <select name="store_id">
                                            <option value="">choose product store</option>
                                            @foreach($stores as $store)
                                                <option value="{{$store->id}}"@if($product->store_id == $store->id) selected @endif>{{$store->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">code: </label>
                                        <div class="col-md-9">
                                            <input type="text" name="code" value="{{$product->code}}"  id="projectinput2" class="form-control" >
                                        </div>
                                    </div>

{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-md-3 label-control" for="projectinput2">photo: </label>--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <input type="file" value="{{$product->photo}}" src="{{ asset('storage/images/'.$product->photo) }}" accept="image/*"  name="photo" id="projectinput2" class="form-control" >--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">storePlace </label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{$product->storePlace}}" name="storePlace" id="projectinput4" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">count: </label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{$product->count}}" name="count" id="projectinput4" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">sellerPrice: </label>
                                        <div class="col-md-9">
                                            <input type="text"  value="{{$product->sellerPrice}}" name="sellerPrice" id="projectinput4" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">purchasingPrice: </label>
                                        <div class="col-md-9">
                                            <input type="text"  value="{{$product->purchasingPrice}}" name="purchasingPrice" id="projectinput4" class="form-control" >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <button type="submit" class="btn btn-primary">Create</button>

                                    </div>
                                </div>


                            </form>
                            <div>
                                <a href="{{route('product.create')}}" class="btn btn-danger" >Back to List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
