@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="page-inner">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <a href="{{ route('dashboard.landing.comparisons.add') }}" class="btn btn-success">{{ __('Zeile hinzufügen') }}</a>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('Kriterium') }}</th>
                        <th>{{ __('Wir') }}</th>
                        <th>{{ __('Konkurrenz') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->criterion }}</td>
                            <td>{{ $item->us_value }} {!! $item->us_is_positive ? '✅' : '❌' !!}</td>
                            <td>{{ $item->them_value }} {!! $item->them_is_positive ? '✅' : '❌' !!}</td>
                            <td>
                                <a href="{{ route('dashboard.landing.comparisons.edit', $item->id) }}" class="btn btn-primary btn-sm">{{ __('Bearbeiten') }}</a>
                                <a href="{{ route('dashboard.landing.comparisons.delete', $item->id) }}" class="btn btn-danger btn-sm delete-confirm">{{ __('Löschen') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
