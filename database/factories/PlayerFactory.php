<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Player;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $roles = Role::all();
        $equipes = Player::all();
        return [
            "nom" => $this->faker->lastName,
            "prenom" => $this->faker->firstName(),
            "age" => $this->faker->numberBetween(18, 30),
            "phone" => $this->faker->phoneNumber,
            "email" => $this->faker->unique()->email,
            "genre_id" => $this->faker->numberBetween(1, 2),
            "origine" => "Belge",
            "role_id" => $this->faker->numberBetween(1, count($roles)),
            "equipe_id" => $this->faker->numberBetween(1, count($equipes))
        ];
    }
}
