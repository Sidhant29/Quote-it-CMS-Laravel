@php
    $title = 'Quote It';
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')
<div class="container">
    <h1><span style='color:orange'>{{ $title }}</span></h1>
    <img width='200px' src="http://localhost/QuoteIt/public/marks.png" alt="logo">
    <ul>
        <li>
            
            Let your thoughts Flow and let the world know how you think. Quote Yourself by <br>
            registering today.
            
        </li>
        </ul>
    <h3>{{ __('Features') }}</h3>
    <ul>
        <li>{{ __('All visitors can read all Quotes.') }}</li>
        <li>{{ __('All visitors can read all users\' profile.') }}</li>
        <li>{{ __('All visitors can sign up.') }}</li>
        <li>{{ __('Each the logged in user can post, edit and delete.') }}</li>
        <li>
            {{ __('The admin can edit and delete all users\' accounts and posts.') }}
            <ul>
                <li>
                    {{ __('Admin') }}:
                    <ul>
                        <li>name: sidhant</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endsection