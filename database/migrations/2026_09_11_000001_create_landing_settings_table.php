<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('landing_settings', function (Blueprint $table) {
            $table->id();

            $table->boolean('alert_banner_active')->default(true);
            $table->string('alert_banner_text')->nullable();

            $table->string('logo_image')->nullable();
            $table->string('phone_display')->default('0221 1234567');
            $table->string('phone_href')->default('+492211234567');

            $table->string('hero_headline')->default('Elektriker in Ihrer Nähe — in 30 Min. vor Ort');
            $table->text('hero_subheadline')->nullable();
            $table->string('hero_cta_label')->default('Jetzt anrufen');
            $table->string('hero_image')->nullable();

            $table->decimal('rating_value', 2, 1)->default(4.9);
            $table->unsignedInteger('rating_count')->default(512);

            $table->string('about_owner_name')->default('Jürgen Klostermann');
            $table->string('about_owner_photo')->nullable();
            $table->text('about_story')->nullable();

            $table->string('trust_1_title')->nullable();
            $table->string('trust_1_text')->nullable();
            $table->string('trust_2_title')->nullable();
            $table->string('trust_2_text')->nullable();
            $table->string('trust_3_title')->nullable();
            $table->string('trust_3_text')->nullable();
            $table->string('trust_4_title')->nullable();
            $table->string('trust_4_text')->nullable();

            $table->string('company_name')->default('Elektriker Klostermann');
            $table->string('company_address')->nullable();
            $table->string('company_email')->nullable();
            $table->string('certifications_text')->nullable();
            $table->string('impressum_url')->nullable();
            $table->string('privacy_url')->nullable();
            $table->string('terms_url')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('landing_settings');
    }
};
