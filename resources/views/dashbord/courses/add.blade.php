@extends('layouts.baseDashbord')
@section('content')


    <section class="content-header">
        <h1>
           اضافة دورة
        </h1>
    </section>


    <section class="content ">
        <div class="row">
         <div class="col-8">
             @if($result == true)
             <div class="alert alert-success">
                 <p>
                     تمت عملبية الاضافة بنجاح
                 </p>
             </div>
             @endif


            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> ضافة دورة</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('add_courses')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">اسم الدورة</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">المحتوى </label>
                            <input type="text"  class="form-control" id="content-text" placeholder=" " name="content">
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#content-text').summernote();
                            });
                        </script>


                        <div class="form-group">
                            <label >تاريخ اعلان الدورة </label>
                            <input type="date" class="form-control" name="course_date">
                        </div>





                        <div class="form-group">
                            <label >صورة لدوررة </label>
                            <input type="file" class="form-control" name="post_image">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">أضـافـة الـمـقـال</button>
                    </div>
                </form>
            </div>






        </div>
        </div>

    </section>

@endsection
