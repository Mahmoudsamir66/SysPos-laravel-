
@extends('SysPos.Layout.master');
@section('content')
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
@endsection
