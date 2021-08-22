<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <div class="d-flex justify-content-end pb-2">
            <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
        </div>
        <form action="create_model.php" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Places" name="places">
            </div>
            <div class="form-group">
                <input type="date" class="form-control"  name="date">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="description">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="file" id="file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Create</button>
            </div>
        </form>
    </div>