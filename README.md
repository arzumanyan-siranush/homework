# Homework task.

## Requirements
1. Composer 2
2. PHP >= 8.2

## Installation
1. Copy `.env.example` to `.env`
2. Run `composer install`
3. Run `php artisan key:generate`

## Using the command
0. As there was no exactly an instruction how the file needs to be uploaded, I decided to keep it basic. 
1. Store it in the storage/app/private path with any name, e.g. `filename.csv`
2. Run `php artisan commissions:calculate filename.csv`

## Running tests
0. Test file is stored in `tests/Feature/CommissionCalculationTest.php`
1. Run `php artisan test` to run Laravel tests.
