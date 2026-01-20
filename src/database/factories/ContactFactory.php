<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5), // テーブル名に合わせて typo そのまま
            'first_name' => $this->faker->name(),             // 名前
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->numberBetween(1, 3),    // 1:男性 2:女性 3:その他
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->numerify('090########'),
            'address' => $this->faker->address(),
            'building' => $this->faker->secondaryAddress(),
            'detail' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
