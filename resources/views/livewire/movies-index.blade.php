
<div style="padding: 10%">
    <h1>Liste des films</h1>

    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <br>
    <a class="btn" href="{{route('movies.create')}}"> + Ajouter un film</a>    

    <livewire:movies-table />


</div>
