# HO-WAN-LOI website
VIEW LIVE: [website](https://restaurant-howanloi.nl/)

![test](/public/img/readme-img.png)

This is a website for the Chinese Indian restaurant Ho wan loi. They wanted an online space to show their menu to the customers. I planned to work with someone else who would do the frontend but their schedule didn’t allow for this leading me to also do the frontend of the project.

## How to run
To run Laravel you need to install *PHP* and *Composer*. If all that is done be sure to add a .env file with all the right settings(check the .env.example for reference).

If you have installed it you need to run the following commands:

```bash
# RUN THESE ONCE ONCE
npm i # to install all npm packages
php artisan migrate:fresh # to ensure the database is installed
php artisan db:seed # to fill the database 

# DEVELOPMENT
php artisan serve # to run Laravel
npm run watch # to watch for Tailwind changes and update the css
```

After this you can create an account at the route of `/register`.
