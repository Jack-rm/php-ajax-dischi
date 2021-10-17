<?php
        foreach ($records as $album) { ;?>

        <div>
            <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">
            <ul>
                <li> Title: <?php echo $album['title']; ?>
                </li>
                <li> Author: <?php echo $album['author']; ?>
                </li>
                <li> Genre: <?php echo $album['genre']; ?>
                </li>
                <li> Year: <?php echo $album['year']; ?>
                </li>
            </ul>
        </div>
<?php }; ?>