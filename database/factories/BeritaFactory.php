<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategoriList = ['Program Kerja', 'Workshop', 'Kegiatan', 'Pelantikan', 'Prestasi', 'Pengumuman', 'Rema PERS'];
        $judul = fake()->sentence(rand(6, 12));
        
        return [
            'judul' => rtrim($judul, '.'),
            'slug' => '', // akan di-generate otomatis oleh model
            'kategori' => fake()->randomElement($kategoriList),
            'tanggal' => fake()->dateTimeBetween('-3 months', 'now'),
            'author' => fake()->randomElement(['Admin BEM', 'Tim Redaksi', 'Humas BEM REMA', 'Kabinet Suar Sangga']),
            'thumbnail' => 'beritas/default-' . rand(1, 3) . '.jpg', // akan di-replace dengan upload real
            'konten' => $this->generateArticleContent(),
            'views' => fake()->numberBetween(0, 5000),
        ];
    }

    /**
     * Generate realistic article content
     */
    private function generateArticleContent(): string
    {
        $paragraphs = [];
        $numParagraphs = rand(5, 10);
        
        for ($i = 0; $i < $numParagraphs; $i++) {
            $paragraphs[] = '<p>' . fake()->paragraph(rand(4, 8)) . '</p>';
            
            // Randomly add headings
            if ($i > 0 && $i % 3 === 0) {
                $paragraphs[] = '<h2>' . fake()->sentence(rand(3, 6)) . '</h2>';
            }
        }
        
        return implode("\n\n", $paragraphs);
    }
}
