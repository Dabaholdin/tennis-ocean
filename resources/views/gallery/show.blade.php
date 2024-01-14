@extends('layouts.base')

@section('title', 'Галерея')

@section('content')
<section class="gallery_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($albums as $album)
                        @foreach ($album->GetImages as $image)
                            <div class="col-md-3 mb-3 d-flex aimage-container " >
                                
                                    <img class="img-fluid w-100 text-center shadow" src="{{asset('storage/images/album-images/') .'/'. $image->path}}" alt="">
                                
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection