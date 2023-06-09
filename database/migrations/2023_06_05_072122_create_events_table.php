<?php

use App\Models\Category;
use App\Models\EventPlanner;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(EventPlanner::class);
            $table->foreignIdFor(Category::class);
            $table->string('name')->index();
            $table->text('description');
            $table->json('tags');
            $table->string('poster')->nullable();
            $table->dateTime('post_at')->nullable();
            $table->unsignedBigInteger('reviewed_by')->nullable();
            $table->dateTime('reviewed_at')->nullable();
            $table->text('remarks')->nullable();
            $table->boolean('has_passed_review')->default(false);
            $table->boolean('is_posted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
