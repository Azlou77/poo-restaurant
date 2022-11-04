
        <h1 class="text-center">Les menus</h1>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Menu</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($menus as $menu): ?>
                <tr>
                    <td><?= $menu->getId() ?></td>
                    <td><?= $menu->getName() ?></td>
                    <td><?= $menu->getPrice() ?></td>
                </tr>
                <?php endforeach; ?>    
            </tbody>
        </table>
