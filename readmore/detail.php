<?php
    require_once('../partial/header.php');
?>
    <div class="container p-4">
        <div class="d-flex justify-content-end">
            <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
        </div>
    <?php
        require_once('../database/database.php');
        $id=$_GET['id'];
        $list_places =getOnedata($id);
        foreach ($list_places as $list) :
        
    ?>
    <div class="card m-2 shadow-lg  bg-white rounded">
        <div class="card-body">
            <div class="d-flex ">
                <div class="card-image mr-3 border shadow-sm  bg-white rounded">
                    <img class="img-fluid" width="200" height="200" src="../assets/images/<?= $list['image'] ?>" alt="image">
                </div>
                <div class="info">
                    <strong class="display-title"><?= $list['places'] ?></strong>
                    <p> <?= $list['date'] ?></p>
                    <p><?= $list['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
        <form action="#" method="post" class="rounded-lg col-lg-5 col-md-4 m-auto bg-white p-3" >
                <div class="text-center">
                    <h4>BOOKING NOW</h4>
                </div>
                <div class="form-group">
                    <label for="number">Member</label>
                    <input type="number" name="member" required class="form-control" id="member" placeholder="member" length="8">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" required class="form-control" id="phone" placeholder="phone" length="8">
                </div>
                <div class="form-group">
                    <label for="number">startDate</label>
                    <input type="date" name="startDate" class="form-control" id="startDate" placeholder="startDate">
                </div>
                <div class="form-group">
                    <label for="number">endDate</label>
                    <input type="date" name="endDate" class="form-control" id="endDate" placeholder="endDate">
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <a href="../pages/home.php"><button type="submit" class="btn btn-secondary w-100">BOOKING</button></a>
                    </div>
                </div>
    <?php endforeach; ?>
</div>
