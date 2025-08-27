<?php
$orderDirClass = $orderDir;
$orderDir = ($orderDir === 'ASC') ? 'DESC' : 'ASC';
?>

<table class="table table-dark table-striped">
    <caption>USER LIST</caption>
    <thead>
        <tr>
            <th class="<?=$orderBy === 'id' ? $orderDirClass : '' ?>"><a href="?orderBy=id&orderDir=<?=$orderDir?>">ID</a></th>
            <th class="<?=$orderBy === 'username' ? $orderDirClass : '' ?>"><a href="?orderBy=username&orderDir=<?=$orderDir?>">Username</a>
            </th>
            <th class="<?=$orderBy === 'fiscalcode' ? $orderDirClass : '' ?>"><a href="?orderBy=fiscalcode&orderDir=<?=$orderDir?>">Codice Fiscale</a></th>
            <th class="<?=$orderBy === 'email' ? $orderDirClass : '' ?>"><a href="?orderBy=email&orderDir=<?=$orderDir?>">Email</a></th>
            <th class="<?=$orderBy === 'age' ? $orderDirClass : '' ?>"><a href="?orderBy=age&orderDir=<?=$orderDir?>">Età</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($users) {
            foreach ($users as $user) { ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['fiscalcode'] ?></td>
                    <td><a href="mailto:"><?= $user['email'] ?></a></td>
                    <td><?= $user['age'] ?></td>
                </tr>
            <?php
            }
        } else { ?>
            <tr>
                <td colspan="5">No users found</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>