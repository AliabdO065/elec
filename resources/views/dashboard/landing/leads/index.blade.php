@extends('dashboard.layouts.layout')
@php
    $problemTypeLabels = [
        'power_outage' => __('Stromausfall'),
        'short_circuit' => __('Kurzschluss / Brandgeruch'),
        'breaker_trip' => __('Sicherung fliegt raus'),
        'other' => __('Sonstiges'),
    ];
@endphp
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="page-inner">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('Datum') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Telefon') }}</th>
                        <th>{{ __('PLZ') }}</th>
                        <th>{{ __('Anliegen') }}</th>
                        <th>{{ __('E-Mail') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                            <td>{{ $item->name }}</td>
                            <td><a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></td>
                            <td>{{ $item->postal_code }}</td>
                            <td>{{ $problemTypeLabels[$item->problem_type] ?? $item->problem_type }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('dashboard.landing.leads.delete', $item->id) }}" class="btn btn-danger btn-sm delete-confirm">{{ __('Löschen') }}</a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7">{{ __('Noch keine Rückruf-Anfragen.') }}</td></tr>
                    @endforelse
                </tbody>
            </table>
            {{ $items->links() }}
        </div>
    </div>
</div>
@endsection
