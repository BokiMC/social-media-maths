<?php include "inc/header.php"; ?>

<?php 
$user = get_user();
echo "<img class='profile-image' src='" . $user['profile_image']. "'>";

user_profile();
?>

    <form method="POST" enctype="multipart/form-data">
        Select image to uploads
        <input type="file" name="profile_image_file">
        <input type="submit" value="Upload Image" name="submit">
    </form>

<?php include "inc/footer.php"; ?>
