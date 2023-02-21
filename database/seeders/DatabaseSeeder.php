<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Faker\Factory as Faker;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *P
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin')
        ]);

        DB::table('users')->insert([
            'name' => 'fernando',
            'email' => 'fernandopraw@gmail.com',
            'password' => bcrypt('admin')
        ]);

        DB::table('users')->insert([
            'name' => 'Admin2',
            'email' => 'admin2@email.com',
            'password' => bcrypt('admin2') 
        ]);

        DB::table('users')->insert([
            'name' => 'Admin3',
            'email' => 'admin3@email.com',
            'password' => bcrypt('admin3') 
        ]);
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 100; $i++){
            DB::table('anggotas')->insert([
                'email' => $faker->email(),
                'nama_depan' => $faker->firstname(),
                'nama_belakang' => $faker->lastname(),
                'tanggal_lahir' => $faker->date(),
                'NIK' => $faker->regexify('[0-9]{16}'),
                'agama' => $faker->randomElement(
                    ['Buddha', 'Katolik', 'Protestan', 'Islam', 'Konghucu', 'Hindu']),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => $faker->address(),
                'tanggal_join' => $faker->date(),
                'pasfoto' => $faker->imageUrl(450, 350, 'animals', true),
                'fotoKtp' => $faker->imageUrl(450, 350, 'animals', true)
            ]);
        }

        for($i = 1; $i <= 30; $i++){
            $title = $faker->words(3, true);
            DB::table('blog_posts')->insert([
                'title' => $title,
                'user_id' => User::inRandomOrder()->first()->id,
                'slug' => Str::slug($title, '-'),
                'content' => $faker->paragraphs(10, true),
                'image' => $faker->imageUrl(rand(3,8) * 100, rand(3,8) * 100, 'animals', true),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        for($i = 1; $i <=20; $i++){
            DB::table('galleries')->insert([
                'title' => 'title' . $i,
                'description' => 'Description',
                'imagepath' => $faker->imageUrl(rand(3,8) * 100, rand(3,8) * 100, 'animals', true)
            ]);
        }
        Db::table('actors')->insert([
            'nama' => 'Kamin',
            'posisi' => 'Ketua Organisasi',
            'prioritas' => 0,
            'manager_id' => null
        ]);
        Db::table('actors')->insert([
            'nama' => 'Erisun',
            'posisi' => 'Wakil Ketua',
            'prioritas' => 1,
            'manager_id' => 1
        ]);
        Db::table('actors')->insert([
            'nama' => 'Arni',
            'posisi' => 'Iwalie',
            'prioritas' => 1,
            'manager_id' => 2
        ]);
        Db::table('actors')->insert([
            'nama' => 'Agustina',
            'posisi' => 'Bendahara',
            'prioritas' => 2,
            'manager_id' => 2
        ]);
        Db::table('sliders')->insert([
        'description' => 'Acara Marga Lie Bersama dalam merayakan HUT-RI ke-77',
        'path' => 'assets/slider/margalie1.jpeg'
        ]);
        Db::table('sliders')->insert([
        'description' => 'Acara Marga Lie Bersama dalam merayakan HUT-RI ke-77',
        'path' => 'assets/slider/margalie2.jpeg'
        ]);
        Db::table('sliders')->insert([
        'description' => 'Acara Marga Lie Bersama dalam merayakan HUT-RI ke-77',
        'path' => 'assets/slider/margalie3.jpeg'
        ]);
        Db::table('sliders')->insert([
        'description' => 'Acara Marga Lie Bersama dalam merayakan HUT-RI ke-77',
        'path' => 'assets/slider/margalie4.jpeg'
        ]);
    }
}
