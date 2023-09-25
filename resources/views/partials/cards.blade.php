@php
    
@endphp

<div class="bg-card-container">
    <div class="container">
        <div class="row row-cols-6">
            @foreach ($comics as $singleComics)
                <div class="col py-3">
                    <div class="card card-settings d-flex flex-column gap-3">
                        <img src="{{ $singleComics['thumb'] }}" alt="">
                        <h5> {{ $singleComics['series'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
