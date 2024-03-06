<?php

namespace Database\Factories;

use App\Models\Cancion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cancion>
 */
class CancionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Cancion::class;

    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->randomElement(['Power Slam', 'Adventure of a Lifetime', 'Winter Morning', 'Pulse Power', 'Maverick Hunter', 'Futurisma', 'King of the Streets', 'Valley', 'Dance Around the World', 'A perfect Hero']),
            'artista'=>$this->faker->randomElement(['Paradelous', 'Coldplay', 'Purrple Cat', 'Dynatron', 'Carpenter Brut', 'Flashworx', 'Lazerhawk', 'Leavv', 'The Three Queens', 'Maurizio Dejorio']),
            'discografia'=>$this->faker->randomElement(['Sons of the Light', 'Travel', 'Aether Dreams', 'Hypersonic', 'The nightmare before the dawn', 'TimeLapse', 'Overdrive', 'Dreams Garden', 'Eurobeat Collection 1996', 'Loneliness']),
            'genero'=>$this->faker->randomElement(['Eurobeat', 'Pop', 'Chillwave', 'Synthwave', 'Deathwave', 'Rock', 'Metal', 'Ambience Music', 'Dance', 'Alternative Electronic']),
            'fecha_lanzamiento'=>$this->faker->dateTimeBetween('-50 years', 'now')->format('Y-m-d'),
            'precio' => $this->faker->randomFloat(2, 0, 20),
            'puntuacion'=>$this->faker->randomFloat(2, 0, 5),
        ];
    }
}
