
    <div  style="background-image:url(assets/images/bg.jpg); width: 100%; height: 100vh; background-size:cover; background-position: center;">
        <div class="p-4 ">
            <form action="process/register_model.php" method="post" class="rounded-lg col-lg-5 col-md-4 m-auto bg-white p-3" >
                <div class="text-center">
                    <h4>Register For Login</h4>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" required class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" required class="form-control" id="password" placeholder="Password" length="8">
                
                </div>
                <input type="hidden" name="role" class="form-control" value="user">
                <div class="form-row">
                    <div class="col-5">
                        <button type="submit" class="btn btn-secondary w-100 fa fa-user"aria-hidden="true">Register</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div> 
