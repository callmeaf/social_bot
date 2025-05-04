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
        Schema::create('social_bots', function (Blueprint $table) {
            $table->id();
            /**
             * @var \Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface $socialRepo
             */
            $socialRepo = app(\Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface::class);
            $table->foreignIdFor($socialRepo->getModel()::class)->constrained()->cascadeOnDelete();
            $table->string('status');
            $table->string('type');
            $table->string('token');
            $table->string('name');
             $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_bots');
    }
};
