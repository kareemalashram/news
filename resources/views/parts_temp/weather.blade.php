<section class="bg0 p-t-50 p-b-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-50">
                <div class="p-r-10 p-r-0-sr991">
                    <div class="how2 how2-cl4 flex-s-c">
                        <h3 class="f1-m-2 cl3 tab01-title">
                            النشرة الجوية
                        </h3>
                    </div>

                    <div class="p-b-40">
                        <!-- Item post -->
                        @foreach($weather as $item)
                        <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
                            <a href="blog-detail-01.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                <img src="images/post-43.jpg" alt="IMG">
                            </a>

                            <div class="size-w-9 w-full-sr575 m-b-25">
                                <h5 class="p-b-12">
                                    <a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                        {{ $item->title }}
                                    </a>
                                </h5>

                                <div class="cl8 p-b-18">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        {{ App\User::where('id','=',$item->auter)->get()->first()->name }}
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
											-
										</span>

                                    <span class="f1-s-3">

										</span>
                                </div>

                                <p class="f1-s-1 cl6 p-b-24">

                                    {{ Str::limit($item->descrition,50)}}
                                </p>

                                <a href="{{ route('weather_single',$item->id) }}" class="f1-s-1 cl9 hov-cl10 trans-03">
                                    Read More
                                    <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>
            </div>

            <div class="col-md-10 col-lg-4 p-b-50">
                <div class="p-l-10 p-rl-0-sr991">
                    <!-- Banner -->
                    <div class="flex-c-s">
                        <a href="#">
                            <img class="max-w-full" src="images/banner-03.jpg" alt="IMG">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
