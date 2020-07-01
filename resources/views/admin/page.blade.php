@extends('layouts.app')

@section('head')
    <script>
    </script>
@endsection

@section('content')
    <div class="app">
        <div class="container">
            <h1>
                Edit page {{ $page->name }}
            </h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="">
                <div id="editor">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-input">
                            Name:
                        </label>
                        <input type="text" name="name" class="form-control" value="{{ $page->name}}">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-input">
                            Code:
                        </label>
                        <input type="text" name="code" class="form-control" value="{{ $page->code}}" disabled>
                    </div>
                    <div class="mt-2">
                        <block-list :blocks="{{  $blocks}}  "></block-list>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="/admin" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
