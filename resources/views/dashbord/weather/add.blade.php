@extends('layouts.baseDashbord')
@section('content')


    <section class="content-header">
        <h1>
            اضافة خبر طقس
        </h1>
    </section>


    <section class="content ">
        <div class="row">


            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">اضافة خبر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('add_weather')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان المقال</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">المحتوى </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="content">
                        </div>


                            <div class="form-group">
                                <label >Select</label>
                                <select class="form-control" name="catagorey">

                                    @foreach($cats as $ca)
                                        <option value="{{ $ca-> id }}">{{ $ca-> name }}</option>

                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">أضـافـة الـمـقـال</button>
                    </div>
                </form>
            </div>






        </div>

    </section>

@endsection
