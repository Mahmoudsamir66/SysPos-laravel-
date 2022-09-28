@extends('SysPos.Layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><i class="fas fa-edit text-info ml-2"></i>  تعديل اسم المخزن</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    @include('SysPos.Alert.success')
    @include('SysPos.Alert.Error')
    <!-- Main content -->

        <!-- /.card-header -->
        <!-- form start -->
        <form class="form form-horizontal" action="{{ route('stores.Update',$id) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="form-body">

                <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput7">Product type : </label>
                    <div class="col-md-9">
                        <input type="text" id="timesheetinput5" value="{{$id->name}}" class="form-control" name="name">
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Save</button></i>
                </button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

    </section>
    </div>
    </div>
@endsection
