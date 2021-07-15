@extends('homee')

@section('page')

    <section class="bg0 p-b-70 p-t-5">
        <!-- Title -->
        <div class="bg-img1 size-a-18 how-overlay1" style="background-image:url  {{ \App\attachments::where('id' , $post->image)->first()->path }}">
            <div class="container h-full flex-col-e-c p-b-58">
                <a href="{{ route('single_course',$post->id) }}" class="f1-s-10 cl0 hov-cl10 trans-03 text-uppercase txt-center m-b-33">
                    {{ $post-> name}}
                </a>

                <h3 class="f1-l-5 cl0 p-b-16 txt-center respon2">

                    {{ $post-> descrption}}

                    {{ Str::limit($post-> descrption,50)}}


                </h3>

                <div class="flex-wr-c-s">
					<span class="f1-s-3 cl8 m-rl-7 txt-center">
						<span class="m-rl-3">-</span>

						<span>
             {{\Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->locale('ar_AR')->diffForHumans()}}
						</span>
					</span>

                    <span class="f1-s-3 cl8 m-rl-7 txt-center">
						5239 Views
					</span>

                    <a href="" class="f1-s-3 cl8 m-rl-7 txt-center hov-cl10 trans-03">
                        0 Comment
                    </a>
                </div>
            </div>
        </div>

        <!-- Detail -->
        <div class="container p-t-82">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 p-b-100">
                    <div class="p-r-10 p-r-0-sr991">
                        <!-- Blog Detail -->
                        <div class="p-b-70">
                            <p class="f1-s-11 cl6 p-b-25">
                                {{ $post-> descrption}}

                            </p>


                            <!-- Tag -->
                            <div class="flex-s-s p-t-12 p-b-15">
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-danger" data-toggle="modal" data-target="#exampleModal">التسجيل</button>
                                </div>
                            </div>

                            <!-- Share -->
                            <div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>

                                <div class="flex-wr-s-s size-w-0">
                                    <a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-facebook-f m-r-7"></i>
                                        Facebook
                                    </a>

                                    <a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-twitter m-r-7"></i>
                                        Twitter
                                    </a>

                                    <a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-google-plus-g m-r-7"></i>
                                        Google+
                                    </a>

                                    <a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-pinterest-p m-r-7"></i>
                                        Pinterest
                                    </a>
                                </div>
                            </div>
                        </div>



                        <!-- Leave a comment -->
                        <div>
                            <h4 class="f1-l-4 cl3 p-b-12">
                                التعليقات
                            </h4>

                            <p class="f1-s-13 cl8 p-b-40">
                                اترك تعليقا
                            </p>



                            <form method="post" action="{{ route('single_course', request()->route('id') ) }}">
                                @csrf



                                <label> العنوان</label>
                                <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="title" placeholder="title">

                                <label> اسم المستخدم</label>

                                <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="user_name" placeholder="Name">
                                <label>البريد الاكتروني</label>

                                <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email">

                                <label>الوصف</label>


                                <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="text" placeholder="title"></textarea>


                                <input type="submit" value="ارسال" class="btn btn-primary btn-block" style="margin: 10px;">




                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 col-lg-4 p-b-100">
                    <div class="p-l-10 p-rl-0-sr991">
                        <!-- Banner -->
                        <div class="flex-c-s">
                            <a href="#">
                                <img class="max-w-full" src="{{ asset($post->image) }}" alt="IMG">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">الالتحاق بدورة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="add_new_trainee" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> الاسم </label>
                                    <input type="text" name="full_name" class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> البريد الاكتروني </label>
                                    <input type="text" name="email" class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> العنوان </label>
                                    <input type="text" name="address" class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> رقم الهاتف </label>
                                    <input type="text" name="mobile" class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> تاريخ ميلاد </label>
                                    <input type="date" name="birthday" class="form-control">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="button" onclick="krem();" id="submit_form" class="btn btn-primary">موافق</button>
                </div>
            </div>
        </div>
        <script>
            function krem(){

                $.ajax({
                    url: "{{ route('register_new_traneea', request()->route('id')) }}",
                    type: "POST",
                    data: $("#add_new_trainee").serialize(),
                    success : function (e) {

                        if (e.status == true){
                            alert('Done');

                        }else {
                            alert('no');
                        }

                    }

                })



            }

        </script>

@endsection
