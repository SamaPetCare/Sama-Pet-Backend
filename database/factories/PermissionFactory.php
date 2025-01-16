<?php

namespace Database\Factories;

use App\Models\Permission;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permission>
 */
class PermissionFactory extends Factory
{
    protected $model = Permission::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'edit users',
                'create users',
                'manage providers',
                'view reports',
                'delete records',
                 'create role',
                'assign permissions'
            ]),
        ];
    }
}
