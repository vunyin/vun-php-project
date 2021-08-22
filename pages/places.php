<?php require_once('partial/header.php'); ?>
    <div class="text">
        <h1>Manage Places</h1>
    </div>
    <!-- button research places  -->
    <form action="" method="post" class="col-lg-4 rounded-lg " style="margin-left:450px; margin-top:30px">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search places" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
            </div>
    </form>
    <div class="container p-4">
        <div class="d-flex justify-content-end p-2">
            <a href="process/create_html.php" class="btn btn-primary">Add Places+</a>
        </div>
        <?php
            require_once ('database/database.php');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //search
                $travels = searchByPlaces($_POST);
            }else{
                //select
                $travels = getAllData();
            }
            foreach($travels as $data):
                $description=readMore($data['description'],200);
        ?>
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="200" src="./assets/images/<?=$data['image'] ?>" alt="">
                    </div>
                    <div class="info">
                        <h1 class="display-4"><?=$data['places']; ?> </h1>
                        <strong><?=$data['date']; ?></strong>
                        <p style="box-sizing: content-box;"><?=$description?></p>
                        <a href="readmore/detail.php?id=<?=$data['travelID']?>" class="btn btn-primary ">Read More</a>

                    </div>
               </div>
                <div class="action d-flex justify-content-end">
                        <a href="process/update_html.php?id=<?=$data['travelID']?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                        <a href="process/delete_model.php?id=<?=$data['travelID']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
