<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

<h1>Create User</h1>

<?php if(session()->getFlashdata('message')): ?>
    <p><?= session()->getFlashdata('message') ?></p>
<?php endif; ?>

<form action="<?= base_url('user/store') ?>" method="post">                     
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname" required><br><br>

    <label for="middlename">Middle Name:</label>
    <input type="text" name="middlename" id="middlename" required><br><br>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname" required><br><br>

    <button type="submit">Create User</button>
</form>


</body>
</html>
