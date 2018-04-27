<div class="data">
    <table class=" table-responsive table table-striped table-bordered table-hover">
        <thead class="thead-invers">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Tax (%)</th>
            <th>Total Salary</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $results = Users::getAll();
            foreach ($results as $result) {
                ?>
                <tr>
                    <td scope="row"><?= $result->firstName ?> </td>
                    <td><?= $result->lastName ?></td>
                    <td><?= $result->age ?></td>
                    <td><?= $result->username ?></td>
                    <td><?= $result->email ?></td>
                    <td><?= $result->password ?></td>
                    <td><?= $result->jobTitle ?></td>
                    <td><?= $result->salary ?></td>
                    <td><?= ($result->tax * 100)?></td>
                    <td>
                        <?= $result->calcSalary() ?>
                        <a href="?action=edit&id=<?= $result->ID?>">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </button>
                        </a>
                        <a href="?action=delete&id=<?= $result->ID?>">
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-remove" aria-hidden="true"></i>
                            </button>
                        </a>

                    </td>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>
</div>