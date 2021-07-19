<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->faker;
        $composition =  [
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'content' => $faker->paragraph($nbSentences = 4, $variableNbSentences = true),
            'category_id' => $faker->randomElement([1, 2, 3, 4, 5, 6])
        ];

        foreach ($composition as $key => $value) {
            error_log($key . ': ' . $value . ' end');
        }
        return $composition;
    }
}
