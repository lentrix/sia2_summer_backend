<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lname' => $this->faker->lastName,
            'fname' => $this->faker->firstName,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'points' => $this->faker->numberBetween(100,4000),
        ];
    }
}
