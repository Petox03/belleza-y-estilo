<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Status::factory()->create(['status'=>'Pendiente', 'color'=>"yellow"]);
        \App\Models\Status::factory()->create(['status'=>'Aceptada', 'color'=>"indigo"]);
        \App\Models\Status::factory()->create(['status'=>'En Curso', 'color'=>"purple"]);
        \App\Models\Status::factory()->create(['status'=>'Completada', 'color'=>"green"]);
        \App\Models\Status::factory()->create(['status'=>'Cancelada', 'color'=>"red"]);

        \App\Models\Role::factory()->create(['role'=>'Admin']);
        \App\Models\Role::factory()->create(['role'=>'Estilista']);
        \App\Models\Role::factory()->create(['role'=>'Maquillista']);
        \App\Models\Role::factory()->create(['role'=>'Cajero']);

        \App\Models\Service::factory()->create(['service' => 'Corte de cabello']);
        \App\Models\Service::factory()->create(['service' => 'Tintura de cabello']);
        \App\Models\Service::factory()->create(['service' => 'Peinado']);
        \App\Models\Service::factory()->create(['service' => 'Maquillaje']);
        \App\Models\Service::factory()->create(['service' => 'Tratamiento facial']);
        \App\Models\Service::factory()->create(['service' => 'Manicura']);
        \App\Models\Service::factory()->create(['service' => 'Pedicure']);
        \App\Models\Service::factory()->create(['service' => 'Masaje de cuerpo completo']);

        \App\Models\Schedule::factory()->create(['schedule' => '10:00 - 11:00']);
        \App\Models\Schedule::factory()->create(['schedule' => '11:00 - 12:00']);
        \App\Models\Schedule::factory()->create(['schedule' => '12:00 - 13:00']);
        \App\Models\Schedule::factory()->create(['schedule' => '13:00 - 14:00']);
        \App\Models\Schedule::factory()->create(['schedule' => '14:00 - 15:00']);
        \App\Models\Schedule::factory()->create(['schedule' => '15:00 - 16:00']);
        \App\Models\Schedule::factory()->create(['schedule' => '16:00 - 17:00']);
        \App\Models\Schedule::factory()->create(['schedule' => '17:00 - 18:00']);

        \App\Models\User::factory()->create(['name' => 'Alberto Sosa' ,
            'email' => 'petox.somart@outlook.com', 
            'password' => '$2y$12$Y911ZO5Gfa5BC8jujB6CjeTzuP.AAGvfiDaXhFjh/qaQE1lRCR3Nq',
            'role_id' => 1]);
    }
}
