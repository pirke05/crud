@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('category.store') }}" method="POST">
                <input type="text" name="name" placeholder="Enter name" required/>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
