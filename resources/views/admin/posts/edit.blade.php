@extends('layouts.app')

@section('metaTitle')
    DB BOOLPRESS | {{$post->title}}
@endsection

@section('content')
    
    {{-- Sezione table_post --}}
    <section id="section_table_posts" class="mb-5">

        {{-- Table --}}
        <table class="table_posts mx-auto">
    
            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Image</th>
                <th>Publication_date</th>
            </tr>
    
            {{-- Body --}}
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['title']}}</td>
                <td>{{$post['slug']}}</td>
                <td>{{$post['description']}}</td>
                <td>
                    <figure class="img_wrapper">
                        <img src="{{$post['image']}}" alt="">
                    </figure>
                </td>
                <td>{{$post['publication_date'] == null ? 'null' : $post['publication_date'] }}</td>
            </tr>
    
        </table>
    </section>

    {{-- Sezione form edit --}}
    <section id="form_edit_wrapper" class="container text-white">

        {{-- Form aggiungi elemento --}}
        <form action="{{route('admin.posts.update', $post)}}" method="POST">
    
            {{-- key --}}
            @csrf
            @method('PUT')
    
            {{-- Title --}}
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="title" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo" value="{{$post['title']}}">
    
                {{-- Error validation --}}
                @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
    
            {{-- Description --}}
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="10" placeholder="Inserisci una descrizione">{{$post['description']}}</textarea>
    
                {{-- Error validation --}}
                @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
    
            {{-- Image --}}
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="URL Immagine" value="{{$post['image']}}">
    
                {{-- Error validation --}}
                @error('image')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            {{-- Date --}}
            <div class="form-group">
                <label for="publication_date">Data di pubblicazione</label>
                <input type="date" class="form-control @error('publication_date') is-invalid @enderror" name="publication_date" id="publication_date" value="{{$post['publication_date'] !== null ? $post['publication_date'] : ''}}">
    
                {{-- Error validation --}}
                @error('publication_date')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            {{-- BTN aggiungi --}}
            <div class="btn_add d-flex justify-content-center">
                <button type="submit" class="btn btn-warning font-weight-bold">Modifica</button>
            </div>
    
        </form>

    </section>

@endsection