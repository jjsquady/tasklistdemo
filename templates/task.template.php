<div class='col-md-6'>
<form action='../index.php' method='POST'>
    <input type='hidden' name='todo' value='<?php echo $todo ?>'>
    <div class='panel panel-primary'>
        <div class='panel-heading'>
            <span><?php echo $todo->title ?></span>
        </div>
        <div class='panel-body'>
            <p>Description:<?php echo $todo->description ?></p>
            <p>Date: <?php echo  $todo->date ?></p>
        </div>
        <div class='panel-footer'>
            <button class='btn btn-danger' type='submit'>Remove</button>
        </div>
    </div>
</form>
</div>