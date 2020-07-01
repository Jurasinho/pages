@extends('layouts.app')

@section('head')
    <script>
        var $pages = @json($pages, JSON_PRETTY_PRINT);
    </script>
@endsection

@section('content')
    <div class="app">
        <div class="container">
            <table class="table ">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Code</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td><a href="{{ route('admin.page', ['id'=>$page->id]) }}">{{ $page->name }}</a></td>
                        <td>{{ $page->code }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
