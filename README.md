#### Les recherches faites pour développer l'application
 
    https://web-id.fr/fr/blog/back-end/setup-windows-wsl2-x-ubuntu-x-laravel-sail-docker
    https://www.youtube.com/watch?v=4K4nkncZ2OQ
    https://laravel.com/docs/10.x/artisan#writing-commands
    https://laravel.com/docs/10.x/scheduling#defining-schedules
    https://laravel-livewire.com/docs/2.x/pagination#paginating-data
    https://jetstream.laravel.com/3.x/installatio
    https://developer.themoviedb.org/reference/trending-movies
    https://developer.themoviedb.org/reference/movie-details
    
#### Pour la mise en place de l'applicatif
    git clone https://github.com/mazizbk/movies-fetcher.git
    cd movies-fetcher
    
    Instaler les packet
    composer install
    
    Monter le docker
    ./vendor/bin/sail up -d
    
    Génerer une clé API sail
    ./vendor/bin/sail artisan key:generate

    copier le fichier
    cp .env.example .env
    
    rajouter ces deux lignes à la fin du fichier .env : 
    API_BASE_URL=https://api.themoviedb.org/3
    API_KEY=eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjJkNjNjZGRjMDY2ZDk5ZWQzZTgwNmQzMjY3MThjYSIsInN1YiI6IjYyNGVhNTRhYjc2Y2JiMDA2ODIzODc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.zuuBq1c63XpADl8SQ_c62hezeus7VibE1w5Da5UdYyo
    
    proceder à la migration des tables : 
    ./vendor/bin/sail artisan migrate
    
    lancer la commande pour la mise a jour des films
    ./vendor/bin/sail artisan movies:update


    
    
