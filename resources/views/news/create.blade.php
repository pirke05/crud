@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('news.store') }}" method="POST">
                <input type="text" name="title" placeholder="Enter title" required/>
                <textarea name="body" cols="30" rows="10"></textarea>
                <select name="categoryId">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
