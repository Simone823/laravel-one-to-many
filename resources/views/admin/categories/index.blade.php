@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | CATEGORIES')

@section('content')

    {{-- Sezione tabella categories --}}
    <section id="section_table_categories">

        {{-- Title --}}
        <h3 class="text-white">Categories</h3>

        {{-- Table categories --}}
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