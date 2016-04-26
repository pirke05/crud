@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="{{ route('news.create') }}">Create new news</a>
        </div>
        <div class="row">
            <table class="table-stripped col-sm-12">
                <thead>
                <tr>
                    <th>
                        Title
                    </th>
                    <th>
                        Body
                    </th>
                    <th>
                        Category
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $newsItem)
                    <tr>
                        <td>{{ $newsItem->title }}</td>
                        <td>{{ $newsItem->body }}</td>
                        <td>{{ $newsItem->category->name }}</td>
                        <td>
                            <a class="btn btn-primary"
                               href="{{ route('news.update', ['news'=> $newsItem->id])  }}">Edit</a>
                            <form action="{{ route('news.destroy', ['newsItem'=> $newsItem->id]) }}" method="POST">
                                <input type="hidden" name="_method" value="delete"/>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
