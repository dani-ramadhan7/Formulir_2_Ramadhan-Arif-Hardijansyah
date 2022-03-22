@extends('template')

@section('container')
    <h1>Halaman Artikel Berita</h1>
    <h5>Editor: {{ $name }} | {{ $email }}</h5>
    <hr/>
    @foreach ($articles as $article)
        <article class="mb-5">
            <h3>
                <a href="">
                    {{ $article['title'] }}
                </a>
            </h3>
            <h6>By: {{ $article['author'] }}</h6>
            <p>{{ $article['body'] }}</p>
        </article>
    @endforeach
@endsection





















{{-- <article class="mb-5">
    <h3>
        <a href="/posts/{{ $post["slug"] }}">
            {{ $post["title"] }}
        </a>
    </h3>
    <h6>By: {{ $post["author"] }}</h6>
    <p>{{ $post["body"] }}</p>
</article> --}}