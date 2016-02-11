# Transformers Example

Example for stackoverflow question: [35320509](http://stackoverflow.com/questions/35308268/model-calls-from-laravel-transformer-class/35320509#35320509)

## Installation

`composer install`

Prepare your `.env` file appropriately, only the mysql configuration is needed

`php artisan migrate --seed`

This will prepare the models and some sample data to demonstrate the transformers

## Usage

Navigation to / to see example output

We are simply changing the names of the database columns on the output to demonstrate the transformation

## Files of interest

`app/Http/Controllers/TransformerController`

`app/Transformers/*`

`app/Models/*`


