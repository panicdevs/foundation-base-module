<?php

declare(strict_types=1);

namespace Foundation\Base\Database\Seeders\V1\BaseTableSeeder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class BaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();
    }
}
