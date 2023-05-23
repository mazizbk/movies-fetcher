
<x-app-layout>
<div style="padding: 10%">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2{{ $movies['poster_path'] }}" alt="{{ $movies['title'] }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h3>{{ $movies['title'] }}</h3>
            <p>{{ $movies['overview'] }}</p>
            <ul>
                <li><strong>Date de sortie:</strong> {{ $movies['release_date'] }}</li>
                <li><strong>Langue originale:</strong> {{ $movies['original_language'] }}</li>
                <li><strong>Popularité:</strong> {{ $movies['popularity'] }}</li>
                <li><strong>Note moyenne:</strong> {{ $movies['vote_average'] }}</li>
                <li><strong>Nombre de votes:</strong> {{ $movies['vote_count'] }}</li>
            </ul>
        </div>
    </div>
</div>



</div>
</x-app-layout>
