<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>username</th>
            <th>email</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->id;?></td>
            <td><?php echo $user->name;?></td>
            <td><?php echo $user->username;?></td>
            <td><?php echo $user->email;?></td>
            <td>
                <a href="/admin/users/view/<?php echo $user->id;?>">view</a>
                <a href="/admin/users/edit/<?php echo $user->id;?>">edit</a>
                <form action="/admin/users/delete/<?php echo $user->id;?>" method="post">
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<a href="/admin/users/add">new</a>
