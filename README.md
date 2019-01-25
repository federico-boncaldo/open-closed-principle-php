# An implementation of the Open/Closed principle in PHP

This implementation is inspired by the [video](https://laracasts.com/series/solid-principles-in-php/episodes/2) by Jeffrey Way on the [Open/closed principle](https://en.wikipedia.org/wiki/Open%E2%80%93closed_principle) in [Laracasts](https://www.laracasts.com) for the serie on [SOLID principles](https://en.wikipedia.org/wiki/SOLID)

## Description

The [Open/closed principle](https://en.wikipedia.org/wiki/Open%E2%80%93closed_principle) represents the O of the five [SOLID principles](https://en.wikipedia.org/wiki/SOLID).
The principle states "software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification"
Specifically in this example the extensible behaviour is separated (calculating the area of shapes) behind the interface as advised by Robert C. Martin.

See the [commit history](https://github.com/federico-boncaldo/open-closed-principle-php/commits/master) to check the changes made to the code.

## Requirements

PHP 5 >= 5.4, PHP 7

## How to

Clone the repository in your local environment and run `php index.php`