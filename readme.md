# Laravel CWT

## About

This project is a study case about a website and API to track workers in work sites.

## Tecnologies and libraries used

- Laravel 13
- PHP 8.3
- PostgreSQL
- PostGIS
- TailwindCSS
- Livewire
- Pint
- PhpStan

## Some considerations of personal development

- Use `softDeletes` in the models to allow restoring deleted records if needed.
- Use `Fillable` attributes in the models to allow mass assignment of the fields to speed up development.
- Use `HasFactory` in the models to allow creating factories for testing and seeding the database.
- Use geopraphic coordinates in the working sites to allow tracking the workers in the site.
- In CompanyWorkingSite table I use [GIST](https://www.postgresql.org/docs/current/gist.html#GIST-EXAMPLES) as the index type for the location field to allow spatial queries in the database.
- In API routes I use [Route Model Binding](https://laravel.com/docs/13.x/routing#route-model-binding) to automatically inject the model instances into the controller methods.

## Documentation

### Users

The users can be:
    - Admin: can manage all the system
    - Worker: can only see his own data
    - Company: can manage all the workers in his company

#### Worker

- Can be assigned to a company and a working site.
- Can have many working sites.
- Can have many companies.

### Company

A company can have many workers and working sites.

### Company Working Sites

A Working site belongs to a company and can have many workers.

## Features

### As Admin

|Feature|Description|
|-------|-----------|
|List all users|Can list all users in the system|
|List all companies|Can list all companies in the system|
|List all working sites|Can list all working sites in the system|

### As Company

|Feature|Description|
|-------|-----------|
|List all workers|Can list all workers in the company|
|List all worker trakings|Can list all worker trackings in the company|
|List all working sites|Can list all working sites in the company|

### As Worker

|Feature|Description|
|-------|-----------|
|List all trakings|Can list all his own trackings|
|List all working sites|Can list all his own working sites|
|List all companies|Can list all his own companies|
