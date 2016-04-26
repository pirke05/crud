@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('category.update', ['category'=>$category]) }}" method="POST">
                <input type="hidden" name="_method" value="put"/>
                <input type="text" name="name" value="{{ $category->name }}" placeholder="Enter name" required/>

                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection
