
        <h1 class="text-center">Les produits</h1>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product->getId() ?></td>
                    <td><?= $product->getName() ?></td>
                </tr>
                <?php endforeach; ?>    
            </tbody>
        </table>
