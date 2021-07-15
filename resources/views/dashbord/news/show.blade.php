@extends('layouts.baseDashbord')
@section('content')
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">عرض الاخبار</h1>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">عرض الاخبار</h3>

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
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>العنوان</th>
                        <th>المحتوى</th>
                        <th>الكاتب</th>
                        <th>التصنيف</th>
                        <th>تاريخ الانشاء</th>
                        <th>حالة النشر </th>
                        <th>الحذف </th>
                        <th>التعديل </th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach($news as $item)

                    <tr id="{{ $item-> id}}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->descrition,50)}}</td>
                        <td>{{ \App\User::where('id', $item->auter) ->get() ->first ()->name }}</td>
                        <td>{{ \App\catgory::where('id',$item->catagorey)->get()->first()->name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td> @if($item->status == 1)
                        <button class="btn btn-success">مفعل </button>
                            @else
                                <button class="btn btn-danger">غير معروض</button>
                            @endif
                        </td>

                        <td>
                            <button class="btn btn-danger" onclick="delete_post({{ $item->id }});"><i class="fa fa-trash"></i></button>

                        </td>
                        <td>
                            <a href="{{ route('edit_news' , $item->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>

                        </td>
                        <td>

                            <a href="?active={{ $item->status}}&post_id={{ $item->id }}" class="btn btn-success">
                                @if($item->status== 1)
                                    <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-toggle-on" aria-hidden="true" ></i>
                                @endif

                            </a>



                        </td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>


    <script>
        function delete_post(post_id) {
            var conf = confirm("are you sure delet");
            if (conf == true){


                $.post("/api/delete_post/"+post_id, function (e) {
                    $("#"+ post_id).fadeOut();

                    console.log(e)

                });

            }

        }
    </script>

@endsection
