<nav class="lk-navbar">
    <div class="lk-container lk-navbar-inner">
        <a href="{{ route('fronted.index') }}" class="lk-logo">
            @if($settings && $settings->logo_image)
                <img src="{{ asset($settings->logo_image) }}" alt="{{ $settings->company_name }}" style="height:36px;width:36px;border-radius:8px;object-fit:cover;">
            @else
                <span class="lk-logo-mark"><i class="fa-solid fa-bolt"></i></span>
            @endif
            {{ $settings->company_name ?? 'Elektriker Klostermann' }}
        </a>

        <ul class="lk-nav-links">
            <li><a href="#lk-services">{{ __('Leistungen') }}</a></li>
            <li><a href="#lk-steps">{{ __('Ablauf') }}</a></li>
            <li><a href="#lk-about">{{ __('Über uns') }}</a></li>
            <li><a href="#lk-comparison">{{ __('Vergleich') }}</a></li>
            <li><a href="#lk-reviews">{{ __('Bewertungen') }}</a></li>
            <li><a href="#lk-faq">{{ __('FAQ') }}</a></li>
            <li><a href="#lk-callback">{{ __('Kontakt') }}</a></li>
        </ul>

        <div class="lk-navbar-actions">
            @if(isset($enabledLanguages) && $enabledLanguages->count() > 1)
                <div class="lk-lang-switch">
                    <button type="button" class="lk-lang-current">
                        {{ strtoupper($currentLocale ?? app()->getLocale()) }} <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <ul class="lk-lang-menu">
                        @foreach($enabledLanguages as $lang)
                            <li>
                                <a href="{{ route('fronted.setLocale', $lang->code) }}"
                                   class="@if(($currentLocale ?? app()->getLocale()) === $lang->code) active @endif">
                                    {{ $lang->native_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="tel:{{ $settings->phone_href ?? '' }}" class="lk-navbar-phone">
                <i class="fa-solid fa-phone"></i>{{ $settings->phone_display ?? '' }}
            </a>
        </div>
    </div>
</nav>
