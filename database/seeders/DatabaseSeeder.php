<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $mayzin = User::factory()->create(['name' => 'May Zin Oo', 'username' => 'mayzinoo', 'password' => '12345678']);


        $frontend = Category::factory()->create(['slug' => 'fontend', 'name' => 'frontend']);
        $backend = Category::factory()->create(['slug' => 'backend', 'name' => 'backend']);

        Blog::factory()->create(['user_id' => $mayzin, 'category_id' => $frontend]);
        Blog::factory()->create(['user_id' => $mayzin, 'category_id' => $backend]);
    }
}
