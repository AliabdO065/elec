@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="page-inner">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <a href="{{ route('dashboard.landing.stats.add') }}" class="btn btn-success">{{ __('Eintrag hinzufügen') }}</a>
            <hr>
            <div style="display:flex;flex-wrap:wrap;gap:20px;">
                @foreach ($items as $item)
                    <div class="card" style="width: 260px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->value }}</h5>
                            <p class="card-text">{{ $item->label }}</p>
                            <p class="card-text"><small class="text-muted">{{ __('Icon') }}: {{ $item->icon }} · {{ __('Reihenfolge') }}: {{ $item->sort_order }}</small></p>
                            <a href="{{ route('dashboard.landing.stats.edit', $item->id) }}" class="btn btn-primary">{{ __('Bearbeiten') }}</a>
                            <a href="{{ route('dashboard.landing.stats.delete', $item->id) }}" class="btn btn-danger delete-confirm">{{ __('Löschen') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
