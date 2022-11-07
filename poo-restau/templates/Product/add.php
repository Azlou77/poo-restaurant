<h1>Ajouter une nouveau produit</h1>

<form method="POST">
    <div class="mb-3 form-floating">
        <label for="name">Nom</label>
        <input type="text" name="name_product" id="name" placeholder="Nom de la catégorie" class="form-control">
    </div>
    <div class="mb-3 form-floating">
        <label for="name">Prix</label>
        <input type="number" name="prix_product" id="name" placeholder="Nom de la catégorie" class="form-control">
    </div>
    <div class="mb-3 form-floating">
        <label for="name">Image</label>
        <input type="text" name="product_image" id="name" placeholder="Nom de la catégorie" class="form-control">
    </div>
    <div class="mb-3 form-floating">
        <label for="name">Catégorie</label>
        <select name="product_category">
            <option value="1">Burger</option>
            <option value="2">Boisson</option>
            <option value="3">Dessert</option>
        </select>
    </div>
    <div class="mb-3 form-floating">
        <label for="name">Description</label>
        <input type="text" name="description_product" id="name" placeholder="Nom de la catégorie" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="Envoyer" >
    </div>
</form>