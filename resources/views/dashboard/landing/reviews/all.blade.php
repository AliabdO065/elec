@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="page-inner">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <a href="{{ route('dashboard.landing.reviews.add') }}" class="btn btn-success">{{ __('Bewertung hinzufügen') }}</a>
            <hr>
            <div style="display:flex;flex-wrap:wrap;gap:20px;">
                @foreach ($items as $item)
                    <div class="card" style="width: calc(33% - 20px);">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->author_name }} — {{ $item->rating }}★</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($item->review_text, 100) }}</p>
                            @if($item->is_placeholder)
                                <span class="badge badge-sample">{{ __('Beispiel') }}</span>
                            @endif
                            <div class="mt-2">
                                <a href="{{ route('dashboard.landing.reviews.edit', $item->id) }}" class="btn btn-primary btn-sm">{{ __('Bearbeiten') }}</a>
                                <a href="{{ route('dashboard.landing.reviews.delete', $item->id) }}" class="btn btn-danger btn-sm delete-confirm">{{ __('Löschen') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
