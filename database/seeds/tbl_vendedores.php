<?php

use Illuminate\Database\Seeder;

class tbl_vendedores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Models\tbl_vendedores::class, 50)->create()->each(function ($vendedores) {
        $vendedores->tbl_vendedores()->save(factory(App\Models\tbl_vendedores::class)->make());
    	});
    }
}
