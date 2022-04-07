<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Ex</title>
</head>
<body>
    <form method="POST" action="<?php echo base_url('validation');?>">
    <label for="username">Username : </label>
    <input type="text" name="username" id="username" value="<?= set_value('username')?>">
    <div style="color:red;"><?= form_error('username');?></div>
    <br>
    <label for="phone">Phone No. : </label>
    <input type="text" name="phone" id="phone" value="<?= set_value('phone')?>">
    <div style="color:red"><?= form_error('phone');?></div>
    <button>SUBMIT</button>
    </form>
</body>
</html>