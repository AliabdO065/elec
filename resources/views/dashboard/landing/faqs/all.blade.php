@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="page-inner">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <a href="{{ route('dashboard.landing.faqs.add') }}" class="btn btn-success">{{ __('Frage hinzufügen') }}</a>
            <hr>
            @foreach ($items as $item)
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->question }}</h5>
                        <p class="card-text">{{ $item->answer }}</p>
                        <a href="{{ route('dashboard.landing.faqs.edit', $item->id) }}" class="btn btn-primary btn-sm">{{ __('Bearbeiten') }}</a>
                        <a href="{{ route('dashboard.landing.faqs.delete', $item->id) }}" class="btn btn-danger btn-sm delete-confirm">{{ __('Löschen') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
