@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | HOMEPAGE')

@section('content')
    
    {{-- Sezione tabella posts --}}
    <section id="section_table_posts" class="mb-5">

        {{-- Title --}}
        <h3 class="text-white">Posts</h3>

        {{-- Table posts --}}
        <table class="table_posts">

            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Category_id</th>
                <th>Image</th>
                <th>Publication_date</th>
            </tr>

            {{-- Foreach posts --}}
            @foreach ($posts as $element)
                <tr>
                    <td>{{$element->id}}</td>
                    <td>{{$element->title}}</td>
                    <td>{{$element->slug}}</td>
                    <td>{{$element->description}}</td>
                    <td>{{$element->category ? $element->category->name : 'null'}}</td>
                    <td>
                        <figure class="img_wrapper">
                            <img src="{{$element->image}}" alt="">
                        </figure>
                    </td>
                    <td>{{$element->publication_date == null ? 'null' : $element->publication_date}}</td>
                </tr>
            @endforeach

        </table>

    </section>

    {{-- Sezione tabella categories --}}
    <section id="section_table_categories">

        {{-- Title --}}
        <h3 class="text-white">Categories</h3>

        {{-- Table posts --}}
        <table class="table_categories">

            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Slug</th>
            </tr>

            {{-- Foreach categories --}}
            @foreach ($categories as $element)
                <tr>
                    <td>{{$element->id}}</td>
                    <td>{{$element->name}}</td>
                    <td>{{$element->slug}}</td>
                </tr>
            @endforeach

        </table>

    </section>


@endsection