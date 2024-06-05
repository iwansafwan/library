<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //associate loan with one member from member table
        $member= Member::find(fake()->numberBetween(1,50));
        //1. fake number between generate random number
        //2. member find and fetch with the random number

        return [
            'book_id' => fake()->numberBetween(1, 300),
            'member_id' => $member->id,
            'member_icNum' => $member->icNum,
            
            //borrow from january till february
            'borrowingDate' => fake()->dateTimeBetween('2024-01-01', '2024-02-01')->format('d/m/Y'),
            //return from march till april
            'returnDate' => fake()->dateTimeBetween('2024-03-01', '2024-04-01')->format('d/m/Y'),
        ];
    }
}
