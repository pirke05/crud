@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('news.update', ['news'=>$news]) }}" method="POST">
                <input type="hidden" name="_method" value="put"/>
                <input type="text" name="title" value="{{ $news->title }}" placeholder="Enter title" required/>
                <textarea name="body" cols="30" rows="10" value="{{ $news->body }}">{{ $news->body }}</textarea>
                <select name="categoryId">
                    @foreach($categories as $category)
                        @if($category->id === $news->category_id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
