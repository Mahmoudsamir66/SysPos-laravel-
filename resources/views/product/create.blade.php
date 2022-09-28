@extends('SysPos.Layout.master');
@section('content')

    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="content-header">Add product </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title" id="horz-layout-basic">product Information</h4>
                        </div>
                        <p class="mb-0">This is the basic horizontal form with labels on left and cost estimation form is the default position.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">
  @include('SysPos.Alert.success')
  @include('SysPos.Alert.Error')
                            <form  class="form-horizontal" action="{{ route('product.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="icon-user"></i> Product Details</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Name of product: </label>
                                        <div class="col-md-9">
                                            <input name="name" type="text" id="projectinput1" class="form-control" >
                                        </div>
                                    </div>
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
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">code: </label>
                                        <div class="col-md-9">
                                            <input type="text" name="code" id="projectinput2" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">photo: </label>
                                        <div class="col-md-9">
                                            <input type="file" accept="image/png, image/gif, image/jpeg"  name="photo" id="projectinput2" class="form-control" >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">storePlace </label>
                                        <div class="col-md-9">
                                            <input type="text" name="storePlace" id="projectinput4" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">count: </label>
                                        <div class="col-md-9">
                                            <input type="text" name="count" id="projectinput4" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">sellerPrice: </label>
                                        <div class="col-md-9">
                                            <input type="text" name="sellerPrice" id="projectinput4" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">purchasingPrice: </label>
                                        <div class="col-md-9">
                                            <input type="text" name="purchasingPrice" id="projectinput4" class="form-control" >
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

        <!-- start table -->
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم المخزن</th>

                <th scope="col">اسم الصنف</th>

                <th scope="col">اسم المنتج</th>
                <th scope="col">العدد </th>
                <th scope="col">سعر البيع</th>

                <th scope="col">العمليات</th>

            </tr>
            </thead>
            <tbody>
            @foreach($products as  $key=>$product)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$product->stores->name}}</td>
                    <td>{{$product->kinds->type}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->count}}</td>
                    <td>{{$product->sellerPrice}}</td>


                    <td>
                        <a href="{{route('product.Edit',$product->id)}}" class="btn btn-warning"><i
                                class="far fa-edit ml-1"></i>تعديل </a>
                        <a type="submit" href="{{route('product.delete',$product->id)}}"
                           class="btn btn-danger" onclick="return confirm('هل انت متاكد من حذف هذا العنصر')" ><i class="fas fa-trash-alt ml-1"></i></i>حذف </a>
                    </td>
                </tr>
                <tr>
            @endforeach
            </tbody>
        </table>



    </section>
@endsection
