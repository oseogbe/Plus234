<?php

use App\Models\Event;
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
        Schema::create('event_pricings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('cost', 12, 2);
            $table->dateTime('payment_deadline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_pricings');
    }
};
