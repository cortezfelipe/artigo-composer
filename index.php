<?php
# When installed via composer
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

for ($i = 0; $i < 10; $i++) {
  echo $faker->name . "<br>";
}
