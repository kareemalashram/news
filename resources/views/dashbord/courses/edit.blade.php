@extends('layouts.baseDashbord')
@section('content')


    <section class="content-header">
        <h1>
            اضافة خبر
        </h1>
    </section>


    <section class="content ">
        <div class="row">


            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">تعديل الدورة</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('edit_courses' , $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان المقال</label>
                            <input value="{{ $course['name'] }}" type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">المحتوى </label>
                            <input value="{{ $course['descrption'] }}" type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="content">
                        </div>

                        <div class="form-group">
                            <label >تاريخ اعلان الدورة </label>
                            <input value="{{ $course['course_date'] }}" type="date" class="form-control" name="course_date">


                        <div class="form-group">
                            <label >صورة المقال </label>
                            <input type="file" class="form-control" name="post_image">
                        </div>

                        @if($course['image'] !=null)


                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <img class="d-50 w-50 img-responsive"  src="/{{ (App\attachments::where('id',$course->image)->get()->first()->path) }}" alt="Second slide">
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                    </div>
                </form>
            </div>






        </div>

    </section>

@endsection
