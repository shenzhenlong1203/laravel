@extends('app')
@section('content')
    <article class="format-image group">
        <h2 class="post-title pad">
            <a href="/article/{{ $article->id }}" rel="bookmark"> {{ $article->title }}</a>
        </h2>
        <div class="post-inner">
            <div class="post-content pad">
                <div class="entry custome">
                    {{ $article->content }}
                </div>
                <a class="more-link-custom" href="/article/{{ $article->id }}/edit"><span><i>修改</i></span></a>
            </div>
        </div>
    </article>
@endsection