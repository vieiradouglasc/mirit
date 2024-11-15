<?php

use App\Models\Fornecedor;
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
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->string('descricao');
            $table->integer('quantidade');
            $table->decimal('valor', 10, 2);
            $table->enum('categoria', ['Insumos', 'Material Baralho', 'Material Incenso/Esfera']);
            $table->foreignIdFor(Fornecedor::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoques');
    }
};
