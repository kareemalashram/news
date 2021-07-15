@extends('homee')

@section('page')

    <section class="bg0 p-b-70 p-t-5">
        <!-- Title -->
        <div class="bg-img1 size-a-18 how-overlay1" style="background-image: url({{ asset($post->image) }});">
            <div class="container h-full flex-col-e-c p-b-58">
                <a href="{{ route('single_post',$post->id) }}" class="f1-s-10 cl0 hov-cl10 trans-03 text-uppercase txt-center m-b-33">
                    {{ $post-> title}}
                </a>

                <h3 class="f1-l-5 cl0 p-b-16 txt-center respon2">

                    {{ $post-> descrition}}

                    {{ Str::limit($post-> descrition,50)}}


                </h3>

                <div class="flex-wr-c-s">
					<span class="f1-s-3 cl8 m-rl-7 txt-center">
						<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">

                            {{ App\User::where('id','=',$post->auter)->get()->first()->name }}
						</a>

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
                                {{ $post-> descrition}}

                            </p>


                            <!-- Tag -->
                            <div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									Tags:
								</span>

                                <div class="flex-wr-s-s size-w-0">
                                    <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                                        Streetstyle
                                    </a>

                                    <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                                        Crafts
                                    </a>
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



                            <form method="post" action="{{ route('single_post', request()->route('id') ) }}">
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

@endsection
