<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Date;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cash_registers', function (Blueprint $table) {
            $table->id();
            $table->date('date_cash_in')->default(now());
            $table->date('date_cash_out');
            $table->decimal('entry_amount', 10, 2);
            $table->decimal('exit_amount', 10, 2);
            $table->decimal('balance', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cash_registers');
    }
};
