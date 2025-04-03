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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->unique();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string(column: 'lastname');
            $table->foreignId('department_id')->constrained();
            $table->timestamps();
        });
        
        $students = [
            ['id_number' => '2021-01-0123', 'firstname' => 'Mary', 'middlename' => 'Maandig', 'lastname' => 'Smith', 'department_id' => 1], 
            ['id_number' => '2022-02-0323', 'firstname' => 'Edelnits', 'middlename' => 'Paclar', 'lastname' => 'Bugart', 'department_id' => 2],  
            ['id_number' => '2023-03-0987', 'firstname' => 'Ann', 'middlename' => 'Tokyo', 'lastname' => 'Callo', 'department_id' => 3], 
        ];

        foreach ($students as $student) {
            DB::table('students')->insert($student);
        }
       

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
