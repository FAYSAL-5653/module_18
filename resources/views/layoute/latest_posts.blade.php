@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Latest Posts</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->latestPost->title }}</td>
                        <td>{{ $category->latestPost->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
