<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(\Database\Seeds\UserSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(TrailersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        
        $this->call(UsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(SeriesmoviesTableSeeder::class);

        $this->call(CommentsTableSeeder::class);
        $this->call(DirectorinmoviesTableSeeder::class);
        $this->call(ActorinmoviesTableSeeder::class);
        $this->call(EpisodesTableSeeder::class);

        $this->call(FeaturemoviesTableSeeder::class);
        $this->call(GenreinmoviesTableSeeder::class);
        $this->call(MovieinseriesTableSeeder::class);
        $this->call(MovieintagsTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(UsermoviesTableSeeder::class);
        $this->call(UserviewsTableSeeder::class);
        
    }
}
