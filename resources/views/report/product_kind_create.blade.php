@extends('SysPos.Layout.master')
@section('content')
    @include('SysPos.Alert.success')
    @include('SysPos.Alert.Error')
<form action="{{route('Report.product_kind')}}" method="get">
    <div class="form-body">
        <h4 class="form-section">
            <i class="icon-user"></i> Product Details</h4>

        <div class="form-group row">
            <label class="col-md-3 label-control" for="projectinput2">type of product: </label>
            <select name="type">
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

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"></i>
                search
            </button>
        </div>
</form>
@endsection
