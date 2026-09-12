@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="page-inner">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('dashboard.landing.settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h4>{{ __('Warnbanner') }}</h4>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="alert_banner_active" name="alert_banner_active" value="1" {{ $settings->alert_banner_active ? 'checked' : '' }}>
                    <label class="form-check-label" for="alert_banner_active">{{ __('Banner anzeigen') }}</label>
                </div>
                @include('dashboard.landing.partials._translatable-field', ['name'=>'alert_banner_text', 'label'=>__('Bannertext'), 'values'=>$settings->translationsFor('alert_banner_text'), 'required'=>false])

                <hr>
                <h4>{{ __('Logo & Telefon') }}</h4>
                <div class="mb-3 form-inline">
                    <label>{{ __('Logo') }}</label>
                    <input type="file" class="form-control" name="logo_image_file">
                    @if($settings->logo_image)
                        <img src="{{ asset($settings->logo_image) }}" style="width:80px;margin-left:20px;" alt="Logo">
                    @endif
                </div>
                <div class="mb-3">
                    <label>{{ __('Telefonnummer (Anzeige)') }}</label>
                    <input type="text" class="form-control" name="phone_display" value="{{ $settings->phone_display }}" required>
                </div>
                <div class="mb-3">
                    <label>{{ __('Telefonnummer (tel:-Link, z.B. +492211234567)') }}</label>
                    <input type="text" class="form-control" name="phone_href" value="{{ $settings->phone_href }}" required>
                </div>

                <hr>
                <h4>{{ __('Hero-Bereich') }}</h4>
                @include('dashboard.landing.partials._translatable-field', ['name'=>'hero_headline', 'label'=>__('Überschrift'), 'values'=>$settings->translationsFor('hero_headline')])
                @include('dashboard.landing.partials._translatable-field', ['name'=>'hero_subheadline', 'label'=>__('Unterüberschrift'), 'type'=>'textarea', 'rows'=>2, 'values'=>$settings->translationsFor('hero_subheadline'), 'required'=>false])
                @include('dashboard.landing.partials._translatable-field', ['name'=>'hero_cta_label', 'label'=>__('Button-Text'), 'values'=>$settings->translationsFor('hero_cta_label'), 'required'=>false])
                <div class="mb-3 form-inline">
                    <label>{{ __('Hero-Bild') }}</label>
                    <input type="file" class="form-control" name="hero_image_file">
                    @if($settings->hero_image)
                        <img src="{{ asset($settings->hero_image) }}" style="width:100px;margin-left:20px;" alt="Hero">
                    @endif
                </div>

                <hr>
                <h4>{{ __('Bewertung (Sticky-Bar)') }}</h4>
                <div class="mb-3 form-inline">
                    <input type="number" step="0.1" min="0" max="5" style="width:120px" class="form-control" name="rating_value" value="{{ $settings->rating_value }}">
                    <input type="number" style="width:160px;margin-left:10px" class="form-control" name="rating_count" value="{{ $settings->rating_count }}">
                </div>

                <hr>
                <h4>{{ __('Über uns') }}</h4>
                <div class="mb-3">
                    <label>{{ __('Name Inhaber') }}</label>
                    <input type="text" class="form-control" name="about_owner_name" value="{{ $settings->about_owner_name }}">
                </div>
                <div class="mb-3 form-inline">
                    <label>{{ __('Foto Inhaber') }}</label>
                    <input type="file" class="form-control" name="about_owner_photo_file">
                    @if($settings->about_owner_photo)
                        <img src="{{ asset($settings->about_owner_photo) }}" style="width:80px;margin-left:20px;" alt="Owner">
                    @endif
                </div>
                @include('dashboard.landing.partials._translatable-field', ['name'=>'about_story', 'label'=>__('Firmengeschichte'), 'type'=>'textarea', 'rows'=>4, 'values'=>$settings->translationsFor('about_story'), 'required'=>false])

                @for($i = 1; $i <= 4; $i++)
                    @include('dashboard.landing.partials._translatable-field', ['name'=>"trust_{$i}_title", 'label'=>__('Trust-Punkt :n: Titel', ['n' => $i]), 'values'=>$settings->translationsFor("trust_{$i}_title"), 'required'=>false])
                    @include('dashboard.landing.partials._translatable-field', ['name'=>"trust_{$i}_text", 'label'=>__('Trust-Punkt :n: Text', ['n' => $i]), 'values'=>$settings->translationsFor("trust_{$i}_text"), 'required'=>false])
                @endfor

                <hr>
                <h4>{{ __('Firma & Footer') }}</h4>
                @include('dashboard.landing.partials._translatable-field', ['name'=>'company_name', 'label'=>__('Firmenname'), 'values'=>$settings->translationsFor('company_name')])
                <div class="mb-3">
                    <label>{{ __('Adresse') }}</label>
                    <input type="text" class="form-control" name="company_address" value="{{ $settings->company_address }}">
                </div>
                <div class="mb-3">
                    <label>{{ __('E-Mail') }}</label>
                    <input type="email" class="form-control" name="company_email" value="{{ $settings->company_email }}">
                </div>
                @include('dashboard.landing.partials._translatable-field', ['name'=>'certifications_text', 'label'=>__('Zertifizierungen / Mitgliedschaften'), 'values'=>$settings->translationsFor('certifications_text'), 'required'=>false])
                <div class="mb-3 form-inline">
                    <input type="text" style="width:32%" class="form-control" placeholder="{{ __('Impressum-URL') }}" name="impressum_url" value="{{ $settings->impressum_url }}">
                    <input type="text" style="width:32%;margin-left:10px" class="form-control" placeholder="{{ __('Datenschutz-URL') }}" name="privacy_url" value="{{ $settings->privacy_url }}">
                    <input type="text" style="width:32%;margin-left:10px" class="form-control" placeholder="{{ __('AGB-URL') }}" name="terms_url" value="{{ $settings->terms_url }}">
                </div>

                <hr>
                <h4>{{ __('Soziale Netzwerke') }}</h4>
                <p class="text-muted">{{ __('Nur ausgefüllte Links werden im Footer der Website angezeigt.') }}</p>
                <div class="mb-3">
                    <label>Facebook</label>
                    <input type="text" class="form-control" placeholder="https://facebook.com/..." name="facebook_url" value="{{ $settings->facebook_url }}">
                </div>
                <div class="mb-3">
                    <label>Instagram</label>
                    <input type="text" class="form-control" placeholder="https://instagram.com/..." name="instagram_url" value="{{ $settings->instagram_url }}">
                </div>
                <div class="mb-3">
                    <label>Twitter / X</label>
                    <input type="text" class="form-control" placeholder="https://x.com/..." name="twitter_url" value="{{ $settings->twitter_url }}">
                </div>
                <div class="mb-3">
                    <label>YouTube</label>
                    <input type="text" class="form-control" placeholder="https://youtube.com/..." name="youtube_url" value="{{ $settings->youtube_url }}">
                </div>

                <hr>
                <button type="submit" class="btn btn-primary">{{ __('Speichern') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
