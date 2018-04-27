<div class="form">
    <form action="<?= $_SERVER['REQUEST_URI']?>" method="post">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Write your First Name" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->firstName : '' ?>" requierd />
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Write your Last Name" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->lastName : '' ?>" requierd />
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" min="0" placeholder="Write your Age" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->age : '' ?>" requierd />
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Write your Username" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->username : '' ?>" requierd />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Write your Email" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->email : '' ?>" requierd />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Write your Password" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->password : '' ?>" requierd />
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" name="position" id="position" placeholder="Write your Position" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->jobTitle : '' ?>" requierd />
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" name="salary" id="salary" min="0" placeholder="Write your Salary" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->salary : '' ?>"  requierd />
        </div>
        <div class="form-group">
            <label for="tax">Tax</label>
            <input type="number" class="form-control" name="tax" id="tax" step="0.1" min="1" max="5" placeholder="Write Tax" value="<?= (isset($_GET['action']) && $_GET['action'] === 'edit') ? $user->tax : '' ?>"  requierd />
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-primary" name="submit" value="Submit" requierd />
        </div>
    </form>
</div>
