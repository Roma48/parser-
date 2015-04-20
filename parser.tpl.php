<h2>Calendar</h2>


<?php
    $i=0;
    foreach($rss->channel->item as $item) {?>

    <?php if($i < 4):?>
    <?php $text = substr($item->title, 0, 10);

    $date = new DateTime($text);
    $now = new DateTime("now");

    if($date->getTimestamp() >= $now->getTimestamp()):?>



    <div>
        <?php
                $date_event = strtotime($text);
                $month = date('M', $date_event);
                $day = date('d', $date_event); ?>
        <span><?php print ($month); ?></span>
        <span><?php print ($day); ?></span>
    </div>

    <div>
        <span style="font-weight: bold"><?php print $item->title; ?></span>
        <p>
            <?php print $item->description; ?>
        </p>
        <a href="<?php print $item->link; ?>">Read more</a>
    </div>

<?php  $i++; endif; ?>

            <?php  endif; ?>
<?php } ?>