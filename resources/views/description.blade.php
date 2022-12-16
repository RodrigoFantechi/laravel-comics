@extends('layout.app')

@section('content')
<section class="banner_blue">
</section>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="my_card p-5 fs-5">
                    <p>{{$tumblers[0]['description']}}</p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>


@endsection