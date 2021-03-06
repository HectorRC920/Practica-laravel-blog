@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($post->image)
                        <img class="card-img-top" src="{{ $post->get_image }}" alt="Imagen post">
                        @endif
                @if ($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                            {!! $post->iframe !!}
                    </div>
                @endif
                <div class="card-header">{{ $post ->title }}</div>
                <div class="card-body">
                    <p>{{ $post->body }}</p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection