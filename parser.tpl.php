<h2>Calendar</h2>


<?php foreach($rss->channel->item as $item) {?>
<<<<<<< HEAD
    <?php $text = substr($item->title, 0, 10);
    date_default_timezone_set("America/Sao_Paulo");
    $date = strtotime($text);
    $now = strtotime("now");
    ?>
<!--    --><?php //if($now == $date): ?>


    <div>
        <?php
                $month = date('M', $date);
                $day = date('d', $date);
        echo $month;
        echo $day;

        ?>
    </div>
=======
>>>>>>> ec2378b2f17fcfc559d35c1b9feb41221f96dc58
    <div>
        <span style="font-weight: bold"><?php print $item->title; ?></span>
        <p>
            <?php print $item->description; ?>
        </p>
        <a href="<?php print $item->link; ?>">Read more</a>
    </div>
<<<<<<< HEAD
<!--        --><?php //endif; ?>
=======
>>>>>>> ec2378b2f17fcfc559d35c1b9feb41221f96dc58
<?php } ?>