<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * table => [columns...] that become JSON, keyed by the language the
     * existing plain-text data is wrapped under before the type change.
     */
    protected array $fields = [
        'landing_settings' => [
            'alert_banner_text', 'hero_headline', 'hero_subheadline', 'hero_cta_label',
            'about_story',
            'trust_1_title', 'trust_1_text', 'trust_2_title', 'trust_2_text',
            'trust_3_title', 'trust_3_text', 'trust_4_title', 'trust_4_text',
            'company_name', 'certifications_text',
        ],
        'landing_stats' => ['label'],
        'landing_services' => ['title', 'description'],
        'landing_steps' => ['title', 'description'],
        'landing_comparisons' => ['criterion', 'us_value', 'them_value'],
        'landing_reviews' => ['review_text'],
        'landing_faqs' => ['question', 'answer'],
    ];

    public function up(): void
    {
        foreach ($this->fields as $table => $columns) {
            foreach ($columns as $column) {
                // Wrap existing plain-text values as {"de": "<value>"} while the
                // column is still text, so the type change below sees valid JSON.
                DB::statement("UPDATE `{$table}` SET `{$column}` = JSON_OBJECT('de', `{$column}`) WHERE `{$column}` IS NOT NULL");
                DB::statement("ALTER TABLE `{$table}` MODIFY `{$column}` JSON NULL");
            }
        }
    }

    public function down(): void
    {
        foreach ($this->fields as $table => $columns) {
            foreach ($columns as $column) {
                DB::statement("ALTER TABLE `{$table}` MODIFY `{$column}` TEXT NULL");
                DB::statement("UPDATE `{$table}` SET `{$column}` = JSON_UNQUOTE(JSON_EXTRACT(`{$column}`, '$.de')) WHERE `{$column}` IS NOT NULL");
            }
        }
    }
};
