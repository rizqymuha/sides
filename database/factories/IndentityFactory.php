<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\District;
use App\Hamlet;
use App\Identity;
use App\Job;
use App\User;
use Faker\Generator as Faker;
use Faker\Provider\ar_SA\Person;

$factory->define(Identity::class, function (Faker $faker) {
    $gender = ['Laki-Laki', 'Perempuan'];
    $religion = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
    $maritalStatus = ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'];
    $education = [
        'Tidak/Belum Sekolah', 
        'Tidak Tamat SD/Sederajat', 
        'Tamat SD/Sederajat', 
        'SLTP/Sederajat', 
        'SLTA/Sederajat',
        'Diploma I/II',
        'Akademi/Diploma III/S. Muda',
        'Diploma IV/Strata I',
        'Strata II',
        'Strata III'
    ];

    $relationStatus = [
        'Kepala Keluarga', 
        'Suami', 
        'Isteri', 
        'Anak', 
        'Menantu',
        'Cucu',
        'Orang Tua',
        'Mertua',
        'Famili Lain',
        'Pembantu',
        'Lainnya'
    ];

    $randomNumber = rand(100, 900);

    $image = "https://picsum.photos/id/$randomNumber/200/300";

    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'idc_number' => $faker->unique()->numberBetween(1000, 9000),
        'fc_number' => $faker->unique()->numberBetween(1000, 9000),
        'pob' => $faker->cityPrefix,
        'dob' => $faker->date('Y-m-d', 'now'),
        'gender' => $faker->randomElement($gender),
        'blood_type' => $faker->bloodType,
        'address' => $faker->address,
        'hamlet_id' => Hamlet::inRandomOrder()->first()->id,
        'village' => $faker->secondaryAddress,
        'postal_code' => $faker->postcode,
        'district_id' => District::inRandomOrder()->first()->id,
        'religion' => $faker->randomElement($religion),
        'marital_status' => $faker->randomElement($maritalStatus),
        // harusnya melebihi dari date $dob
        'wedding_date' => $faker->date('Y-m-d', 'now'),
        'job_id' => Job::inRandomOrder()->first()->id,
        'citizenship' => 'Indonesia',
        'education' => $faker->randomElement($education),
        'relation_status' => $faker->randomElement($relationStatus),
        'father' => $faker->name('male'),
        'mother' => $faker->name('famale'),
        'phone' => $faker->phoneNumber,
        'idc_image' => $image,
        'fc_image' => $image,
    ];
});
