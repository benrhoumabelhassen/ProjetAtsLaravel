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
        // $this->call(UsersTableSeeder::class);

        factory(App\Condidat::class, 10)->create();
        factory(App\Formation::class, 10)->create();
        factory(App\Certification::class, 40)->create();
        factory(App\User::class, 3)->create();


        factory(App\Employee::class, 30)->create()->each(function($employee){
            factory(App\Paiement::class, 5)->make()->each(function($paiement) use($employee){
                $employee->employeePaiement()->save($paiement);
            });
            factory(App\Pointage::class, 5)->make()->each(function($pointage) use($employee){
                $employee->employeePointages()->save($pointage);
            });
            factory(App\Conge::class, 5)->make()->each(function($conge) use($employee){
                $employee->employeeConges()->save($conge);
            });
            $formations = DB::table('formations')->pluck('id');
            $last = count($formations) - 1;
            if (count($formations))
            {
                $employee->employeeFormations()->attach( $formations[ rand(0, $last ) ] );
            }


        });



    }
}
