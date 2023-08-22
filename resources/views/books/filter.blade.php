<form action="{{ route('books.filter') }}" method="GET">
    <div>
        <label for="category">Catégorie :</label>
        <select name="category" id="category">
            <option value="">Toutes les catégories</option>
            <option value="roman">Roman</option>
            <option value="science-fiction">Science-fiction</option>
            <!-- Ajoutez d'autres options de catégorie ici -->
        </select>
    </div>
    <div>
        <label for="availability">Disponibilité :</label>
        <select name="availability" id="availability">
            <option value="">Toutes les disponibilités</option>
            <option value="disponible">Disponible</option>
            <option value="non-disponible">Non disponible</option>
        </select>
    </div>
    <button type="submit">Filtrer</button>
</form>

@foreach ($books as $book)
    <!-- Afficher les détails du livre ici -->
@endforeach
