<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\Pegawai;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Pegawai::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'nama_pegawai' => $faker->name,
        'jabatan_pegawai' => 'kosong',
        'sipp' => '',
    ];
});
