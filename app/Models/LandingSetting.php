<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingSetting extends Model
{
    use HasFactory, HasTranslations;

    protected $translatable = [
        'alert_banner_text', 'hero_headline', 'hero_subheadline', 'hero_cta_label',
        'about_story',
        'trust_1_title', 'trust_1_text', 'trust_2_title', 'trust_2_text',
        'trust_3_title', 'trust_3_text', 'trust_4_title', 'trust_4_text',
        'company_name', 'certifications_text',
    ];

    protected $fillable = [
        'alert_banner_active', 'alert_banner_text',
        'logo_image', 'phone_display', 'phone_href',
        'hero_headline', 'hero_subheadline', 'hero_cta_label', 'hero_image',
        'rating_value', 'rating_count',
        'about_owner_name', 'about_owner_photo', 'about_story',
        'trust_1_title', 'trust_1_text',
        'trust_2_title', 'trust_2_text',
        'trust_3_title', 'trust_3_text',
        'trust_4_title', 'trust_4_text',
        'company_name', 'company_address', 'company_email', 'certifications_text',
        'impressum_url', 'privacy_url', 'terms_url',
        'facebook_url', 'instagram_url', 'twitter_url', 'youtube_url',
    ];

    protected $casts = [
        'alert_banner_active' => 'boolean',
        'rating_value' => 'float',
        'rating_count' => 'integer',
    ];
}
