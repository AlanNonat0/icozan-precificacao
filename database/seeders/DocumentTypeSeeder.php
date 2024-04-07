<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commercial\DocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $contents = [
        ['id' => 1, 'name' => 'CPF'],
        ['id' => 2, 'name' => 'CNPJ'],
       ];

       foreach ($contents as $data) {
            DocumentType::firstOrcreate($data);
       }
    }
}
