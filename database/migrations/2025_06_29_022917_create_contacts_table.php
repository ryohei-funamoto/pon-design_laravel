<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->enum('inquiry_type', [
                'お仕事のご依頼・ご相談',
                'お見積りのご依頼',
                '採用について',
                'その他',
            ])->default('お仕事のご依頼・ご相談');
            $table->string('name');
            $table->string('company_name');
            $table->string('email');
            $table->string('tel')->nullable();
            $table->text('content')->nullable();
            $table->enum('know', [
                'Google/Yahoo検索',
                'SNS',
                'ブログ',
                '友人や知人',
                'その他',
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
