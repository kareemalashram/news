@extends('homee')

@section('page')



    <div class="p-b-20">
        <div class="how2 how2-cl1 flex-sb-c m-r-10 m-r-0-sr991">
            <h3 class="f1-m-2 cl12 tab01-title">
                الدورات
            </h3>


        </div>

        <div class="row p-t-35">
            @foreach(\App\course::where('status' , 1)->get()->sortByDesc('id')->take(3) as $item)
            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                <!-- Item post -->
                <div class="m-b-30">
                    <a href="{{ route('single_course',$item->id ) }}" class="wrap-pic-w hov1 trans-03">
                        <img src="{{ \App\attachments::where('id' , $item->image)->first()->path }}" alt="IMG">
                    </a>

                    <div class="p-t-20">
                        <h5 class="p-b-5">
                            <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                {{ Str::limit($item->descrption,50)}}

                            </a>
                        </h5>

                        <span class="cl8">
												<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
													{{ $item->name }}
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
                                                                 متبقي {{\Carbon\Carbon::createFromTimeStamp(strtotime($item->course_date))->locale('ar_AR')->diffForHumans()}}

												</span>
											</span>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
        </div>
    </div>

@endsection
