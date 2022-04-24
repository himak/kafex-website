@extends('layouts.app')

@section('title', 'Tvorba web stránok')
@section('meta_keywords', 'tvorba web stranky webstranka eshop aplikacia domena hosting softver na mieru dizajn logo')
@section('meta_description', 'Tvorba web stránok, e-shopov a webových aplikácií na mieru')

@section('content')

    @include('pages.partials.hero')
    @include('pages.partials.about')
    @include('pages.partials.services')
    @include('pages.partials.technologies')
    @include('pages.partials.projects')
    @include('pages.partials.contact')
    @include('pages.partials.pre-footer')

@endsection
