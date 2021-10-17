<section>
    <?php
        foreach ($records as $album) { ;?>
            <div class="album-box">
                <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">
                <ul>
                    <li><span>Title:</span> <?php echo $album['title']; ?>
                    </li>
                    <li><span>Author:</span> <?php echo $album['author']; ?>
                    </li>
                    <li><span>Genre:</span> <?php echo $album['genre']; ?>
                    </li>
                    <li><span>Year:</span> <?php echo $album['year']; ?>
                    </li>
                </ul>
            </div>
    <?php }; ?>
</section>