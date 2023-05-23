<div>
    <table id="moviesTable">
        <thead>
            <tr>
            <th>Titre</th>
            <th>Resumé</th>
            <th>Date Sortie</th>
            <th>Image</th>
            @auth

            <th>Actions</th>
            @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->overview }}</td>
                    <td>{{ $movie->release_date }}</td>
                    <td><img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2{{ $movie->poster_path }}" class="external-img wp-post-image lazyloaded" data-ll-status="loaded"></td>
                    @auth
                    <td><a href="{{route('movies.edit',[$movie->id])}}">Modifier</a> &nbsp;
                    <a href="{{route('movies.delete',[$movie->id])}}">Supprimer</a>
                    &nbsp;<a href="{{route('movies.details',[$movie->tmdb_id])}}" target="_blank">Détails</a>
                   </td>
                    @endauth
                </td>
                    <!-- Autres cellules -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
        $('#moviesTable').DataTable();
    </script>
