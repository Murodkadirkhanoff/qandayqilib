<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;
use Spatie\Permission\Models\Role;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'Sport va fitnes' => null,
            'Sog\'liqni saqlash va tibbiyot' => null,
            'Avto' => null,
            'Hi-Tech' => null,
            'Hayvonot olami'=> null,
            'Madaniyat va jamiyat' => null,
            'Uy xo\'jaligi' => null,
            'Xobbi va o\'yin -kulgi' => null,
            'Internet' => null,
            'Bolalar' => null,
            'Basketbol'=> 1,
            'Fudbol'=> 1,
            'Bolalar sporti'=> 1,
            'Tennis'=> 1,
            'Fitnes'=> 1,
            'Boshqalar'=> 1,
            'Ommabop nashrlar'=> 1,
            'Dori turlari'=> 2,
            'Parhez'=> 2,
            'Kasalliklar'=> 2,
            'Kasalliklarni davolash'=> 2,
            'Avtomobil kreditlari'=> 3,
            'Avtomobil sug\'urtasi'=> 3,
            'Ehtiyot qismlar va aksessuarlar'=> 3,
            'Avtomobil markalari'=> 3,
            'Ta\'mirlash va xizmat ko\'rsatish'=> 3,
            'Avtomobil haydash'=> 3,
            'Ofis jihozlari'=> 4,
            'Elektronika'=> 4,
            'Mushuk zotlari'=> 5,
            'Kuchuk zotlari'=> 5,
            'To\'tiqush va kanareykalar'=> 5,
            'Akvarium baliqlari'=> 5,
            'Boshqa uy hayvonlari'=> 5,
            'Ovqatlantirish'=> 5,
            'Xavfsizlik'=> 6,
            'Xayriya'=> 6,
            'Harbiy xizmat'=> 6,
            'San\'at'=> 6,
            'Kino'=> 6,
            'Adabiyot'=> 6,
            'Ijtimoiy harakatlar'=> 6,
            'Siyosat'=> 6,
            'Din'=> 6,
            'Teatr'=> 6,
            'Etika'=> 6,
            'Maishiy texnika'=> 7,
            'Kichik ta\'mirlash'=> 7,
            'Foydali maslahatlar'=> 7,
            'Hammomni tozalash'=> 7,
            'Xonani tozalash'=> 7,
            'Oshxonani tozalash'=> 7,
            'Gilam va matolarni tozalash'=> 7,
            'Mebelni tozalash'=> 7,
            'Hand-made'=> 8,
            'Dizayn'=> 8,
            'Fotografiya'=> 8,
            'Gulchilik'=> 8,
            'Igna tikish'=> 8,
            'Kino'=> 8,
            'Musiqa'=> 8,
            'Adabiyot'=> 8,
            'Stol o\'yinlari'=> 8,
            'Chizma'=> 8,
            'Raqs'=> 8,
            'Televideniya'=> 8,
            'Muxlislar klubi'=> 8,
            'Xavfsizlik'=> 9,
            'Blog yuritish'=> 9,
            'Veb dizayn'=> 9,
            'Veb dasturlash'=> 9,
            'Domenlar, URL va IP'=> 9,
            'Kompyuter o\'yinlari'=> 9,
            'Ijtimoiy tarmoqlar'=> 9,
            'Hosting'=> 9,
            'Bolalar xavfsizligi'=> 10,
            'Homiladorlik va tug\'ish'=> 10,
            'Bolani tarbiyalash va o\'qitish'=> 10,
            'Bolalar salomatligi'=> 10,
            'O\'yinlar va o\'yin -kulgi'=> 10,
            'Bolaning rivojlanishi'=> 10,
            'Chaqaloq parvarishi'=> 10,

        ];
        foreach ($arr as $key=> $value) {
            DB::table('categories')->insert([
                'name' => $key,
                'slug' => Str::slug($key),
                'parent_id' => $value,
            ]);
        }

        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'moderator']);
        $role3 = Role::create(['name' => 'writer']);

        $user = User::create([
            'name' => "Moderator",
            'email' => 'moderator@gmail.com',
            'password' => Hash::make('password')
        ]);

        $user->assignRole($role2);
    }
}
