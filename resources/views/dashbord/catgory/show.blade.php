
@extends('layouts.baseDashbord')
@section('content')

<div class="col-8">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Fixed Header Table</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class=2card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed">
                <thead>
                <tr>
                    <th>#</th>
                    <th>اسمم التصنيف</th>
                    <th>وصف التصنيف</th>
                    <th>بواسطة</th>
                    <th>عدد المقالات </th>
                    <th>تاريخ الانشاء</th>
                    <th>الحذف</th>
                </tr>
                </thead>

                <tbody>

                @foreach($cats as $item)

                    <tr id="{{ $item->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->descrition }}</td>
                        <td>{{ App\User::where('id', $item->by_user) ->get() ->first ()->name }}</td>
                        <td>{{ App\Poste::where('catagorey',$item->id)->get() ->count() }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <button type="button" onclick="delete_cat({{ $item->id }});" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

    <script>
        function delete_cat(cat_id) {
            var conf = confirm("are you sure delet");
            if (conf == true){

                $.ajax({
                    url: "/api/delete_cat/" + cat_id,
                    type : "POST",
                    data :  {},
                    success: function (e) {
                        console.log(e);
                        $("#"+ cat_id).fadeOut();

                    },error: function () {
                        console.log("eroor");

                    }
                })
            }

        }
    </script>
@endsection
