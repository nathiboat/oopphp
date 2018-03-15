<div class="col">
    <div class="mt-4">
        <div class="card" >
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>