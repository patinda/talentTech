<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\TypeTransaction::factory()->create([
        'nom' => 'Paiement marchand',
    ]);
    \App\Models\TypeTransaction::factory()->create([
        'nom' => 'Retrait OM',
    ]);
    \App\Models\TypeTransaction::factory()->create([
        'nom' => 'Dépôt OM',
    ]);
}

}
