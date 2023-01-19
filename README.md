Iniziare progetto laravel 7 da zero
Aprire vs code, entrare nella cartella dove lanciare il progetto e lanciare da terminale il comando: composer create-project --prefer-dist laravel/laravel:^7.0 [NOME PROGETTO]
Entriamo nella cartella progetto e lanciamo i comandi per creare la repository:
Creare una Repository direttamente sul profilo personale di Github
Aprire il terminale preferito e spostarsi nella cartella di lavoro che si vuole inizializzare come repository
Utilizzare il comando git init
Poi il comando git add -A 
Poi il comando git commit -m " Testo del commit " 
Poi il comando: git branch -M main
Poi il comando git remote add origin .........URL DELLA REPO........
Poi il secondo comando git push -u origin main
Se vogliamo utilizzare Sass:
Lanciamo da terminale il comando: npm i
Poi il comando: npm run dev
Poi il comando: npm run watch
Per gestire gli url delle immagini caricate in sass, modificare il file 📃 webpack.mix.js aggiungendo le options in questo modo:
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
    processCssUrls: false});
Per attivare il progetto lanciare il comando: php artisan serve
Clonazione Progetto Laravel Già avviato
Clonare sul pc il progetto da github
Apriamo il progetto con VS Code
Creiamo dentro il progetto un nuovo file 📃 .env
Copiamo e incolliamo dentro il file 📃 .env il contenuto di .env.example
Apriamo il terminale nel progetto e lanciamo il comando: composer install ( Se escono errori passiamo al comando: composer update )
Lanciamo poi il comando: php artisan key:generate
Installiamo le dipendenze di Node con il comando: npm install
Al termine possiamo attivare il server con il comando: php artisan serve
importare bootstrap 5 in laravel 7
A. Lanciare il comando se non ancora fatto: npm i

Lanciare il comando da terminale: npm install bootstrap
Lanciare il comando da terminale: npm i @popperjs/core
Aprire il file 📃app.scss e inserire:
@import '~bootstrap/dist/css/bootstrap.min.css';
Andare nel file app.js nella cartella resources e inserire:
import '../../node_modules/@popperjs/core/dist/umd/popper.min.js';
import 'bootstrap/js/dist/dropdown';
Lanciare da terminale il comando (per generare files css e js nella cartella public): npm run dev
Creare nella view del layout il collegamento ai file compilati da webpack.mix.js:
<link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

<script src=" {{ asset('js/app.js') }} "></script>
Rilanciare d azero il comando da terminale: npm run watch
Usare le classi di bootstrap 5 nelle views
Installare node_modules per usare dipendenze NPM
Lanciare il comando da terminale: npm install
Creare la tabella con le rotte create in laravel
Lanciamo il comando da terminale: php artisan route:list
creare un model
Deve essere scritto in PascalCase e al singolare e deve essere la versione singolare del nome della tabella del DB in inglese

aprire il terminale e lanciare il comando: php artisan make:model Models/NomeModello
creare un controller
Deve essere scritto in PascalCase e al singolare

aprire il terminale e lanciare il comando: php artisan make:controller NomeController
Query per estrarre tutti i dati della tabella
nella public function del controller scrivere:
    public function index(){

        // 'select * from books'
        $all_books = Book::all();

        return view('welcome', compact('all_books') );
    }
struttura per filtrare i record della tabella Where
nella public function del controller scrivere:
    public function index(){

        //filtraggio elementi
        $books_filtered = Book::where('title', 'Like', 'L%')->get();

        return view('welcome', compact('books_filtered') );
    }
Active nel menu
Nelle voci del menu bisogna realizzare un ternario che legge il "name" delle diverse rotte associate alle voci del menu:
<header>
        <ul>
            <li>
                <a class="{{ Request::route()->getName() == 'all_books' ? 'active' : '' }}" href="{{route('all_books')}}">Home</a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}" href="{{route('about')}}">About</a>
            </li>
        </ul>
</header>
Show di un solo record della tabella
creo un rotta in web.php dedicata:
Route::get('/prodotti/{key}', function($key){

    $pasta = config('pasta');

    if( is_numeric($key) && $key >= 0 && $key < count($pasta) ){
        $prodotto_singolo = $pasta[$key];
    } else {
        abort(404);
    }

    // dd($prodotto_singolo);

     return view('pages.pasta.show', compact('prodotto_singolo'));
})->name('show.pasta');
Per ogni elemento stampato dal ciclo foreach, creo un link che richiami la rotta della singola pagina e che passi il dato univoco che permetterà di recuperare il record:
<a href="{{ route('show.pasta', compact('key') ) }}">
creo la view che stamperà i dati del singolo record creato:
@extends('layouts.app')

@section('page-title', "la molisana - singolo prodotto")

@section('main-content')
    <h2>Prodotto: {{ $prodotto_singolo['titolo'] }}</h2>
@endsection
creazione Migration
Lancio da terminale il comando: php artisan make:migration create_NomeTabellaPlurale_table
Compilo il file generato nella cartella 📁database>migrations con le rispettive colonne di cui avrò bisogno al suo interno, facendo attenzione al tipo di dato che sceglierò di utilizzare in fase di riempimento
terminata la compilazione lancio il comando php artisan migrate per migrare le tabella dentro phpmyadmin
Tornare indietro di un passaggio con le migration
Lancio il comando php artisan migrate:rollback
Ricarico da zero tutte le migration svuotandole
Lancio il comando da terminale php artisan migrate:refresh
Creare un seeder
lancio da terminale il comando: php artisan make:seeder HousesTableSeeder
Compila la funzione interna "run" con ad esempio un array multidimensionale che ciclerò per creare diverse istanze in base a quanti dati fittizi ho creato all'interno dell'array multidimensionale
Lanciare il seeder
Metodo 1: php artisan db:seed --class=HousesTableSeeder
Metodo 2: Compilo il file DatabaseSeeder con il nome del file seeder che ho creato e compilato e poi lancio il comando da terminale: php artisan db:seed
creazione model, controller risorsa, migration, seeder con shortcut
lanciamo da terminale: php artisan make:model Models/Pasta -msr
creazione model, controller normale, migration, seeder con shortcut
lanciamo da terminale: php artisan make:model Models/Pasta -msc
creazione controller risorsa
lanciamo da terminale: php artisan make:controller PastaController --resource
scrittura in web.php di un controller risorsa
scriviamo in web.php:
Route::resource('/pastas', PastaController::class);
Per controllare che le rotte del controller risorsa sono state correttamente create lanciamo il comando :
php artisan route:list -v
