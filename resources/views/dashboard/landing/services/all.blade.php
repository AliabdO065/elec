@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="page-inner">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <a href="{{ route('dashboard.landing.services.add') }}" class="btn btn-success">{{ __('Service hinzufügen') }}</a>
            <hr>
            <div style="display:flex;flex-wrap:wrap;justify-content:space-between;gap:20px;">
                @foreach ($items as $item)
                    <div class="card" style="width: calc(50% - 20px);">
                        @if($item->image)
                            <img src="{{ asset($item->image) }}" class="card-img-top" style="height:200px;object-fit:cover;" alt="{{ $item->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }} @unless($item->is_active)<span class="badge bg-secondary">{{ __('inaktiv') }}</span>@endunless</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="{{ route('dashboard.landing.services.edit', $item->id) }}" class="btn btn-primary">{{ __('Bearbeiten') }}</a>
                            <a href="{{ route('dashboard.landing.services.delete', $item->id) }}" class="btn btn-danger delete-confirm">{{ __('Löschen') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
