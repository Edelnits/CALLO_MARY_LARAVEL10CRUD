<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->decimal('midterm', 5, 2);
            $table->decimal('final', 5, 2);
            $table->timestamps();
        });
        $grades = [
            ['student_id' => 1, 'midterm' => 85.50, 'final' => 90.00],  
            ['student_id' => 2, 'midterm' => 88.00, 'final' => 92.50],  
            ['student_id' => 3, 'midterm' => 91.25, 'final' => 89.75],
        ];

        foreach ($grades as $grade) {
            DB::table('grades')->insert($grade);
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
