<?php
    require_once('connect.php');
    $q = mysqli_query($sql, "SELECT * FROM quote_tweet WHERE verify = 0");
    $output = "<tr>\n<th>Username</th><th>Tweet</th><th>Verify</th>\n</tr>\n";
    while($row = mysqli_fetch_array($q)){
        $output .= "<tr>\n<td>". $row['user'] ."</td>\n";
        $output .= "<td><a href='". $row['url'] ."'>". $row['tweet'] ."</a></td>\n";
        $output .= '<td><input type="checkbox" name="verify[]" value="'. $row['id'] .'"></td></tr>';
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post">
            <table>
                <?php echo $output; ?>
            </table><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
    if(!empty($_POST['verify'])){
        $q = 'UPDATE quote_tweet SET verify = 1 WHERE id IN (';
        foreach ($_POST['verify'] as $val) {
          $q .= $val .", ";
        }
        $q .= "0);";
        mysqli_query($sql, $q);
        header("Refresh:0");
    }
?>
