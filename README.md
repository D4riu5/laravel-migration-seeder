MILESTONE 1

Creiamo una tabella trains e relativa Migration

Ogni treno dovrà avere:
- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;) ...

Inserite inizialmente i dati tramite PhpMyAdmin.


MILESTONE 2

Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.


MILESTONE 3

Aggiungiamo un seeder per la classe Train usando FakerPHP.


BONUS MILESTONE 4:

Implementare il seeder un file csv.



Terminal commands

MIGRATION
- php artisan make:migration create_trains_table
- php artisan make:migration add_train_full_name_to_trains_table --table=trains
- php artisan migrate
- php artisan migrate:rollback

MODEL
- php artisan make:model train

CONTROLLER
- php artisan make:controller Guest/pageController

SEEDER
- php artisan make:seeder trainsTableSeeder

(remove 'seeds' from table)
- php artisan migrate:refresh --seed 
- php artisan db:seed --class=trainsTableSeeder   