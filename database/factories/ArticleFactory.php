<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
            'date_of_birth'=>$this->faker->date(),
            'Gender'=> rand(1, 5),
            'Age'=>$this->faker->numberBetween(1,100),
            'father_name'=>$this->faker->word(),
            'nationality'=>$this->faker->word(),
            'nrc'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'passport'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'phone'=>$this->faker->randomNumber(7, true),
            'address'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'first_product_name'=>$this->faker->word(),
            'first_product_no'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'first_vaccination_appointment'=>$this->faker->date(),
            'first_vaccination_date'=>$this->faker->date(),
            'first_vaccinator'=>$this->faker->word(),
            'first_vaccination_stte'=>$this->faker->word(),
            'first_remark'=>$this->faker->word(),
            'first_completed'=>$this->faker->numberBetween(1,2),
            'second_product_name'=>$this->faker->word(),
            'second_product_no'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'second_vaccination_appointment'=>$this->faker->date(),
            'second_vaccination_date'=>$this->faker->date(),
            'second_vaccinator'=>$this->faker->word(),
            'second_vaccination_stte'=>$this->faker->word(),
            'second_remark'=>$this->faker->word(),
            'second_completed'=>$this->faker->numberBetween(1,2),
            'booster_product_name'=>$this->faker->word(),
            'booster_product_no'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'booster_vaccination_appointment'=>$this->faker->date(),
            'booster_vaccination_date'=>$this->faker->date(),
            'booster_vaccinator'=>$this->faker->word(),
            'booster_vaccination_stte'=>$this->faker->word(),
            'booster_remark'=>$this->faker->word(),
            'booster_completed'=>$this->faker->numberBetween(1,2),
        ];
    }
}
