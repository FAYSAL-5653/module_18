@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Posts</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @extends('layouts.app')


    <div class="container">
        <h1>Posts in {{ $category->name }} category</h1>

        <ul>
            @foreach ($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection

@endsection
