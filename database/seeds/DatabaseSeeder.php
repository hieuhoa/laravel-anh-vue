<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
        $this->call(ProductlineTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(OderTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(OderdetailTableSeeder::class);
        //$this->call(OderTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
    }
}
