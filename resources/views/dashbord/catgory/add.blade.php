@extends('layouts.baseDashbord')
@section('content')


    <section class="content-header">
        <h1>
            اضافة تصنيف
        </h1>
    </section>


    <section class="content ">
        <div class="row">


            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">اضافة تصنيف</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('add_catgory')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">اسم التصنيف</label>
                            <input id="cat_name" type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">وصف التصنيف </label>
                            <input id="cat_descrition" type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="descrition">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="button" onclick="add_to_server();" class="btn btn-primary">أضـافـة التصنيف</button>
                    </div>
                </form>
            </div>






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
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسمم التصنيف</th>
                                <th>وصف التصنيف</th>
                                <th>تاريخ الانشاء</th>
                            </tr>
                            </thead>

                            <tbody id="table_data">

                            @foreach($cats as $item)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->descrition }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <button type="button" onclick="get_cats_data();" class="btn btn-primary">أضـافـة التصنيف</button>
                    </div>
                </div>
            </div>




        </div>

    </section>


    <script> function add_to_server() {

        var cat_name = $("#cat_name").val();
        var cat_descrition = $("#cat_descrition").val();
        if (cat_name == "" || cat_descrition == ""){

            alert("يرجى التحقق من حقول");



        }else{
            $.ajax({
                url : "{{route('add_catgory')}}",
                type : "POST",
                data:{
                    'name': cat_name,
                    'descrition': cat_descrition,
                }, success : function (e) {
                    if (e.status == 1){

                        var name = e.name;
                        var descritione = e.descritione;

                        alert("تم تجسيل ااالتصيف");
                        get_cats_data();


                    }else{

                        alert("تاكد من معلومات");

                    }


                },error : function () {
                    alert("تاكد من معلومات")

                }

            })
        }



        }

        function get_cats_data() {
        var conf = confirm("are you sure");
        if (conf == true){

            $.ajax({
                url : "{{ route('add_catgory') }}",
                type : "GET",
                data : {},
                success: function (data) {
                    $("#table_data").html("");
                    for (var i=0 ; i < data.length; i++){
                        var id        = data[i].id;
                        var name      = data[i].name;
                        var desc       = data[i].descrition;
                        var created_at  = data[i].created_at;

                        var tr = "<tr> <td>"+id+"</td> <td>"+name+"</td> <td>"+desc+"</td> <td>"+created_at+"</td> </tr>";
                        $("#table_data").append(tr);

                    }

                }
            })
        }

        }


    </script>

@endsection
