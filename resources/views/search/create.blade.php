@extends('SysPos.Layout.master')
@section('content')
    @include('SysPos.Alert.success')
    @include('SysPos.Alert.Error')
    <div class="row">
        <section id="horizontal-form-layouts">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="content-header">search product </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title" id="horz-layout-basic">product search</h4>
                        </div>
                        <p class="mb-0" style="color: blue;font-family: 'Courier New', Courier, monospace;font-size: xx-large">Enter the product you want to search about it.</p>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('search.productSearch','search.kindSearch')}}" method="get">

                        <div class="card-body">

                            <div class="form-group row" >
                                <label class="col-sm-3 control-label">اchoose product</label>
                                <div class="col-sm-9">
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <input type="text" list="browsers" class="form-control" required id="#" placeholder="اسم المنتج" name="name">
                                        </div>
                                    </div>
                                    <selectlist id="browsers">
                                        @foreach($products as $product)
                                            <option value="{{$product->name}}">

                                        @endforeach
                                            @foreach($stores as $store)
                                                <option value="{{$store->name}}">

                                            @endforeach
                                            @foreach($kinds as $kind)
                                                <option value="{{$kind->type}}">

                                            @endforeach



                                    </selectlist>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                             <button type="submit" class="btn btn-primary"></i>
                                 search
                            </button>
                        </div>

                        <!-- /.card-footer -->
                    </form>

                </div>
            </section>


            <!-- start table -->


            <!-- end table -->
        </div>
    </div>

    <!-- /.content -->
    </div>
@endsection
