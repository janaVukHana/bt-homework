<?php

// 2.Zadatak
// Odraditi prvu stvar iz PHP-a preko PDO klase.
include_once('colors.php');
if (isset($_POST['submit'])) {
    $sort = $_POST['sort'];
    $object = new Colors();
    $object->ShowColors($sort);
} else if(isset($_POST['three_colors'])) {
    $object = new Colors();
    $object->GetThreeColors();
} else if(isset($_POST['del_upd_last'])) {
    $object = new Colors();
    $object->DeleteLastUpdated();
} 
else if(isset($_POST['add_color'])) {
    $color = $_POST['color'];
    $hex_value = $_POST['hex_value'];
    $status = $_POST['status'];
    // $created = $_POST['created'];
    // $updated_at = $_POST['updated_at'];
    $object = new Colors();
    $object->AddColor($color, $hex_value, $status);
} else if(isset($_POST['update_colors'])) {
    $object = new Colors();
    $object->UpdateColors();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors Practice</title>
</head>
<body>
    <!-- show all active colors sorted by data ASC or DESC -->
    <form action="index.php" method="POST">
        <select name="sort" id="">
            <option value="ASC">ASC</option>
            <option value="DESC">DESC</option>
        </select>
        <button type="submit" name="submit">Show active colors sorted by date ACS</button>
    </form>

    <!-- show three colors -->
    <form action="index.php" method="POST">
        <button type="submit" name="three_colors">Get three colors</button>
    </form>

    <!-- delete color last updated -->
    <form action="index.php" method="POST">
        <button type="submit" name="del_upd_last">Delete color last updated</button>
    </form>

    <!-- add color to database -->
    <form action="index.php" method="POST">
        Color name:<input type="text" name="color">
        Hex value: <input type="text" name="hex_value">
        Status: <select name="status" id="">
            <option value="1">Active</option>
            <option value="0">Not active</option>
        </select>
        Created: <input type="text" name="created">
        Updated: <input type="text" name="updated_at">
        <button type="submit" name="add_color">Add new color</button>
    </form>

    <!-- update colors unactive to active in db -->
    <form action="index.php" method="POST">
        <button type="submit" name="update_colors">Update colors</button>
    </form>
</body>
</html>