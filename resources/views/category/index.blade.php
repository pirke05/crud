@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-default" href="{{ route('category.create') }}">Create new category</a>
        </div>
        <div class="row">
            <table class="table-stripped col-sm-12">
                <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Number of news
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->news->count() }}</td>
                        <td>
                            <a class="btn btn-primary"
                               href="{{ route('category.show', ['category'=> $category->id])  }}">Edit</a>
                            <form action="{{ route('category.destroy', ['category'=> $category->id]) }}" method="POST">
                                <input type="hidden" name="_method" value="delete"/>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
