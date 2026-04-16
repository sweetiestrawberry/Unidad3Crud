public function up(): void
{
    Schema::table('carreras', function (Blueprint $table) {
        $table->string('nombre');
    });
}

public function down(): void
{
    Schema::table('carreras', function (Blueprint $table) {
        $table->dropColumn('nombre');
    });
}