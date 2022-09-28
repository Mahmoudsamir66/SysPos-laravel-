@extends('SysPos.Layout.master')
@section('content')

    <div class="card-body">
        @include('SysPos.Alert.success')
        @include('SysPos.Alert.Error')
        <div class="px-3">
            <form class="form form-horizontal" action="{{route('kind.store')}}" method="post">
                @csrf
                <div class="form-body">

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput7">Product type : </label>
                        <div class="col-md-9">
                            <input type="text" id="timesheetinput5" class="form-control" name="type">
                        </div>
                    </div>

                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">submit</button></i>
                                </button>
                            </div>

                            <!-- /.card-footer -->
                        </form>




                <!-- start table -->
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم الصنف  </th>

                        <th scope="col">العمليات</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($kinds as  $key=>$kind)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$kind->type}}</td>



                            <td>
                                <a  href="{{route('kind.Edit',$kind->id)}}" class="btn btn-warning"><i class="far fa-edit ml-1"></i>تعديل </a>
                                <a type="submit" onclick="return confirm('هل انت متاكد من حذف هذا العنصر')"  href="{{route('kind.delete',$kind->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt ml-1"></i></i>حذف </a>
                            </td>
                        </tr>
                        <tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="col-md-4">#</div>

                <!-- end table -->
            </div>
        </div>

        <!-- /.content -->
    </div>
@endsection
