# Esercizio: Laravel - Primi passi (14/03/2024)
nome repo: `laravel-primi-passi`

Ciao ragazzi,
oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!

Per prima cosa, creiamo un nuovo progetto Laravel 9, utilizzando questo comando:
```
composer create-project laravel/laravel:^9.2 laravel-primi-passi	
```
Al termine dell'installazione, entriamo nella cartella del progetto

```
cd laravel-primi-passi
```
avviamo l'artisan serve con uno di questi due comandi:
```
php artisan serve
```
oppure
```
php -S localhost:8000 -t public
```

A questo punto, iniziamo a prendere confidenza con le rotte e le views:

1. Cancelliamo la view `welcome.blade.php` e creiamo una nostra homepage.
2. Facciamo quindi sì che la rotta `/` visualizzi `home.blade.php`
3. Inizialmente stampiamo un <b>Hello World</b>, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

## Bonus

Creare un nuovo file nella cartella config e recuperare con il metodo `config()` i dati da stampare in pagina.