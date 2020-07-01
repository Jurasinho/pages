@extends('layouts.app')

@section('head')
    <script>
        {{--var $blocks = @json($blocks, JSON_PRETTY_PRINT);--}}
    </script>
@endsection

@section('content')
    <div class="app">
        <div class="container">
            <h1>
                Edit page {{ $page->name }}
            </h1>
            <div class="">
                <form class="form" method="post" action="/pages/{{  $page->id }}/save">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-input">
                            Name:
                        </label>
                        <input type="text" class="form-control" value="{{ $page->name}}">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-input">
                            Code:
                        </label>
                        <input type="text" class="form-control" value="{{ $page->code}}" disabled>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
