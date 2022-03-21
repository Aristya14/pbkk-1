@extends('template')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        
    
</head> --}}
@section('container')
    <div class="container text-center">
        <h3>PBKK NEWS</h3>
        <p><em>Tugas 2 PBKK</em></p>
        <p>Aristya Vika ~ 05111940000233</p>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <p><strong>Articles</strong></p><br>
            <img src="https://img.icons8.com/external-prettycons-lineal-color-prettycons/100/000000/external-article-user-interface-vol-3-prettycons-lineal-color-prettycons.png"/>
            <br><br>
            <a href="/article" class="text-decoration-none">PBKK Articles</a>
        </div>
          <div class="col-sm-4">
            <p><strong>Authors</strong></p><br>
            <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/100/000000/external-writer-professions-men-diversity-flaticons-flat-flat-icons.png"/>
            <br><br>
            <a href="/authors" class="text-decoration-none">See All Authors</a>
        </div>
          <div class="col-sm-4">
            <p><strong>Categories</strong></p><br>
            <img src="https://img.icons8.com/stickers/100/000000/diversity.png"/>
            <br><br>
            <a href="/categories" class="text-decoration-none">See All Categories</a>
          </div>
        </div>
      </div>
      @endsection