<a href="{{ route($route, $id) }}">
    <div class="min-w-[286px] max-w-[286px] flex flex-col gap-2">
        <img class="w-full rounded-xl" src="https://i.ytimg.com/vi/{{ $video_link }}/maxresdefault.jpg"
            alt="another-video">
        <span class="font-semibold text-xl">{{ $judul }} | {{ $name }}</span>
    </div>
</a>
