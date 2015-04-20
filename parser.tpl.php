<h2>Calendar</h2>


<?php foreach($rss->channel->item as $item) {?>
    <div>
        <span style="font-weight: bold"><?php print $item->title; ?></span>
        <p>
            <?php print $item->description; ?>
        </p>
        <a href="<?php print $item->link; ?>">Read more</a>
    </div>
<?php } ?>