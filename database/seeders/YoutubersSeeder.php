<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YoutubersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function generateRandomeducation() {
        $education = [
            '龍華','輔仁','治理','台大','清華','真理','大同','虎尾'
        ];
        return $education[rand(0, count($education)-1)];
    }public function generateRandomcountry() {
    $education = [
        '台灣','日本','中國','美國','韓國','印尼','冰島'
    ];
    return $education[rand(0, count($education)-1)];
}

    public function run()
    {
        for ($i=0; $i<25; $i++) {
            $name = $this->generateRandomName();
            $education = $this->generateRandomeducation();
            $country = $this->generateRandomcountry();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('youtubers')->insert([
                'yt_name' => $name,
                'c_id' => rand(1,25),
                'year' =>rand(18,40),
                'education'=>$education,
                'country' => $country,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }

}
