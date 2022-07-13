<?php include "inc/header.php" ?>

<h1>Welcome</h1>
<?php
if(isset($_SESSION["email"])) : ?>

    <form METHOD="POST">
        <h3>Create new post</h3>
        <textarea name="post_content" cols="60" rows="10" placeholder="Post new content"></textarea>
        <input type="submit" value="Post" name="submit">
    </form>    

<?php else : ?>
    
<?php endif; ?>
<?php include "inc/footer.php" ?>