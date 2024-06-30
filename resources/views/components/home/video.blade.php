<a href="{{ url('/watch/' . $video->video_code) }}"
    class="card rounded-md grid grid-cols-subgrid w-1/4 mt-5 transition ease-in-out cursor-pointer card-compact bg-base-100 shadow-md hover:scale-105">
    <figure><img src="https://img.youtube.com/vi/{{ $video->video_code }}/0.jpg" alt="Shoes" />
    </figure>
    <div class="card-body flex flex-row items-center">
        {{-- <img class="w-10 h-10 rounded-full" src="{{ asset('/storage/' . $video->channel->foto_profile) }}"
            alt="{{ $video->channel->nama }}"> --}}
        <p class="font-semibold truncate-text" data-full-text="{{ $video->judul }}">{{ $video->judul }}</p>
    </div>
</a>
@pushOnce('truncate-css')
    <style>
        .truncate-text {
            display: inline-block;
            max-width: 100ch;
            /* Limit to 10 characters */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .truncate-text:hover::after {
            content: attr(data-full-text);
            position: absolute;
            white-space: nowrap;
            background-color: white;
            border: 1px solid #ccc;
            padding: 0.25rem 0.5rem;
            z-index: 10;
            max-width: none;
            /* Set a max-width for the tooltip */
            overflow: hidden;
            text-overflow: ellipsis;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            left: 0;
            top: 100%;
            transform: translateY(4px);
        }

        .truncate-text:hover {
            z-index: 20;
            /* Ensure the element is above others when hovered */
        }
    </style>
@endPushOnce
