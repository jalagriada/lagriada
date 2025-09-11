<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>List of Users</title>
</head>
<body>
    <h1>List of Users</h1>

    <!-- Notification message -->
    <?php if(session()->getFlashdata('message')): ?>
        <p style="color:green;"><?= session()->getFlashdata('message') ?></p>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <?php if (!empty($users) && is_array($users)) : ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th> <!-- New column for Delete button -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['firstname']) ?></td>
                        <td><?= htmlspecialchars($user['middlename']) ?></td>
                        <td><?= htmlspecialchars($user['lastname']) ?></td>
                        <td><?= htmlspecialchars($user['created_at']) ?></td>
                        <td><?= htmlspecialchars($user['updated_at']) ?></td>
                        <td>
                            <a href="<?= base_url('user/delete/' . $user['id']) ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No users found.</p>
    <?php endif; ?>

    <p><a href="/user/create">Add New User</a></p>
</body>
</html>
