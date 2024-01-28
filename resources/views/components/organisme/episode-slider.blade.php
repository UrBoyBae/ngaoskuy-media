@php
    $role = empty($roles) ? "user" : $roles[0];
@endphp

<div class="container-episode">
    <div class="swiper tranding-slider">
        <div class="swiper-wrapper">
            @foreach ($episode as $data)
                <div class="swiper-slide tranding-slide">
                    <a href="{{ route($role.'.video.show', $data->id) }}">
                        <div class="tranding-slide-img">
                            <img src="{{ $data->thumbnail }}" alt="Tranding">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next slider-arrow">
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
        </div>
    </div>
</div>
