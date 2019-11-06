<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/ajaxRequest.js"></script>

<?php if ($_SESSION['isAuth'] && $_SESSION['user_name']=='admin'): ?>
    


    <?=$text?>

<?else:?>
<?endif?>