<?php require_once('partial/header.php');
require_once('partial/navbar.php'); ?>
    <div class="head">
        <img src="http://experiencingtheglobe.com/wp-content/uploads/Welcome.png" alt="" width="100%" height="650px">
    </div>
    <div class="content">
        <h1>Your journey starts here!</h1>
    </div>
    <h4>Where do you want to go?</h4>
    <!-- button research places  -->
    <form action="" method="post" class="col-lg-4 rounded-lg " style="margin-left:450px; margin-top:50px">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search places" name="search">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
        </div>
    </form>
    <div class="allcard pt-3 row">
    <?php
        require_once('database/database.php');
        $lessons = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // search
            $travels = searchByPlaces($_POST);
        } else {
            //select
            $travels = getAlldata();
        }
        foreach ($travels as $data) :
    ?>
        <div class=" col-3">
            <div class="card mb-2 ml-4 shadow-lg  bg-white rounded " style="width: 17rem; ">
                <div class="card-body">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="200" src="./assets/images/<?=$data['image'] ?>" alt="">
                    </div>
                    <a href="readmore/detail.php?id=<?= $data['travelID'] ?>">
                        <h5 class="card-title"><?= $data['places'] ?></h5>
                    </a>
                </div>
            </div>
        </div>
        
    <?php endforeach; ?>
    </div>

</div>
<?php require_once('partial/footer.php'); ?>