<?php

namespace Appkr\Fractal\Example;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Eloquent;
use DB;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $faker = Faker::create();

        // Seeding managers table
        Manager::truncate();

        foreach (range(1, 10) as $index) {
            Manager::create([
                'name'  => $faker->userName,
                'email' => $faker->safeEmail
            ]);
        }

        $this->command->line("<info>Seeded:</info> managers table");

        // Seeding resources table
        Resource::truncate();

        $managerIds = ($this->isL51())
            ? Manager::lists('id')->toArray()
            : Manager::lists('id');

        foreach (range(1, 100) as $index) {
            Resource::create([
                'title'       => $faker->sentence(),
                'manager_id'  => $faker->randomElement($managerIds),
                'description' => $faker->randomElement([$faker->paragraph(), null]),
                'deprecated'  => $faker->randomElement([0, 1])
            ]);
        }

        $this->command->line("<info>Seeded:</info> resources table");

    }

    private function isL51()
    {
        return str_contains(app()->version(), '5.1');
    }

}
