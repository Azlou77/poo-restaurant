<!-- 
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
            </tbody>
        </table> -->


    <div><img src="assets/img/home/banner%20promo.webp" width="1730" height="713" style="padding-bottom: 0px;margin-bottom: -102px;"><button class="btn btn-primary" type="button" style="background: rgb(247, 168, 0);border-style: none;font-size: 31px;width: 250px;padding-top: 0px;margin-left: 655px;padding-bottom: 0px;margin-top: -161px;margin-bottom: -5px;padding-left: 0px;padding-right: 0px;">Découvrez-les</button></div>
    <div class="card">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Meilleurs menus</h2>
                    <p class="w-lg-50"></p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3" style="margin-left: 85px;">
                <div class="col">
                    <div style="width: 300px;height: 300px;"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="assets/img/menus%20bon%20plans/master%20montagnard.jpg">
                        <div class="py-4">
                            <h4 class="text-center">Master Montagnard</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="width: 300px;height: 300px;"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="assets/img/menus%20bon%20plans/mwii%20veggie%20whopper.jpg">
                        <div class="py-4">
                            <h4 class="text-center">MWII Cheese</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="width: 300px;height: 300px;"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="assets/img/menus%20bon%20plans/mwii%20whopper%20cheese.jpg">
                        <div class="py-4">
                            <h4 class="text-center">MWII Veggie Whooper</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4 py-xl-5" style="margin-left: 85px;">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Menus Bon Plans</h2>
                    <p class="w-lg-50"></p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3" style="margin-left: 85px;">
            <?php foreach($menus as $menu): ?>
                <div class="col">
                    <div style="width: 300px;height: 300px;"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src='<?= "assets/img/menus/".$menu->getImg() ?>'>
                        <div class="py-4">
                            <h4 class="text-center" style="width: 329px;"><?= $menu->getName() ?></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?> 
            </div>
           
        </div>
    </div>
    