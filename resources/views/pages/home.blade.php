@extends('layouts.app')

@section('title', 'Tvorba web stránok')
@section('meta_keywords', 'Tvorba web stránok')
@section('meta_description', 'KAFEX - komplexné služby pre Váš web, webdizajn, tvorba web stránok, e-shop, hosting, registrácia domén')

@section('content')

    @include('pages.partials.hero')
    @include('pages.partials.about')
    @include('pages.partials.services')
    @include('pages.partials.technologies')
    @include('pages.partials.projects')

@endsection
