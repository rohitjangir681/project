
<style>
    .success, .error{
        background-color: #adf3b9;
        padding: 5px 10px;
        border: 1px solid green;
        border-radius: 5px;
        margin:20px 10px;
    }
    .error{
        background-color: #f3adad;
        border-color: red;
    }
</style>

<?php if(isset($_SESSION["success"])) { ?>
    <div class="success"> 
    <?php 
    echo $_SESSION["success"];
    unset($_SESSION["success"]);
    ?>
    </div>
<?php } ?>

<?php if(isset($_SESSION["error"])) { ?>
    <div class="error">
    <?php 
    echo $_SESSION["error"];
    unset($_SESSION["error"]);
    ?>
    </div>
<?php } ?>