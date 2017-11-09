<?php
/**
 * Created by PhpStorm.
 * User: Ussef
 * Date: 3/23/2017
 * Time: 12:02 PM
 */

$factory->define(App\Condidat::class, function (Faker\Generator $faker) {

    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'addresse' => $faker->address,
        'email' => $faker->email,
        'tel' => $faker->phoneNumber
    ];

});
$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    $jobs = array(' Associate Technical Consultant', 'Associate Project Manager', 'Trainee Engineer',
        'Trainee Engineer', 'Software Engineer', 'Game Developer', 'Web Development Interns',
        'Web Developer', 'UX UI Developer', 'Android Developer');
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'addresse' => $faker->address,
        'email' => $faker->email,
        'tel' => $faker->phoneNumber,
        'statut' =>  $jobs[$faker->numberBetween(0,count($jobs)-1)]

    ];

});
$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];

});

$factory->define(App\Formation::class, function (Faker\Generator $faker) {
    $certif = array(' PHP', 'JAVA','ANDROID','C#','UNITY','LARAVEL','SOFTSKILLS');
    return [
        'titre' => $certif[$faker->numberBetween(0,count($certif)-1)],
        'formateur' => $faker->name,
        'dure' => $faker->numberBetween(1,50),
        'date_time' => $faker->dateTimeBetween($min = '-2 years', $max = 'now'),
        'lieu' => $faker->city
    ];

});


$factory->define(App\Certification::class, function (Faker\Generator $faker) {
    $certif = array(' PHP', 'JAVA','ANDROID','C#','UNITY','LARAVEL','SOFTSKILLS');
    return [
        'titre' => $certif[$faker->numberBetween(0,count($certif)-1)],
        'date_time' => $faker->dateTimeBetween($min = '-2 years', $max = 'now'),
        'employee_id' => $faker->numberBetween(1, 50),
        'formation_id' => $faker->numberBetween(1, 5)
    ];

});

$factory->define(App\Paiement::class, function (Faker\Generator $faker) {

    return [
        'salaire' => 50 * $faker->numberBetween(10, 30),
        'date_versement' => $faker->dateTimeBetween($min = '-10 months', $max = 'now'),
        'employee_id' => $faker->numberBetween(1, 50)
    ];

});
$factory->define(App\Pointage::class, function (Faker\Generator $faker) {

    return [
        'date_time' => $faker->dateTimeBetween($min = '-10 months', $max = 'now'),
        'employee_id' => $faker->numberBetween(1, 50)
    ];

});
$factory->define(App\Conge::class, function (Faker\Generator $faker) {
    $from = $faker->dateTimeBetween($min = '-10 months', $max = '-5 months');
    $to = $faker->dateTimeBetween($min = '-4 months', $max = 'now');
    return [
        'debut' => $from,
        'fin' => $to,
        'type' => $faker->boolean ? 'Vacance'  : 'Maladie',
        'certification' => $faker->boolean ? 1  : 0,
        'employee_id' => $faker->numberBetween(1, 50)
    ];

});
