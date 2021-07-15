@extends('layouts.baseDashbord')
@section('content')


    <section class="content-header">
        <h1>
       معرض الصور
        </h1>
    </section>


    <section class="content ">
        <div class="row">

            <div>

                <ul id="images">
                    @foreach($attch as $item)


                        <li>
                            <img class="img-responsive img-thumbnail" src="{{asset($item->path) }}" alt="{{ $item->new_name }}">
                        </li>

                    @endforeach
                </ul>

            </div>



        </div>

        <script>
            const gallery = new Viewer(document.getElementById('images'));
        </script>

    </section>

@endsection



