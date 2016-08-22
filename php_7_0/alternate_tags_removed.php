<?php // alternate tags removed ?>
<?php ini_set('asp_tag', 1); ?>
<?php ini_set('short_open_tag', 1); ?>
<?php $a = 1; ?>
<?php $b = 2; ?>

<ul>
<li>&lt;?php <?php echo $a + $b; echo PHP_EOL; ?>
<li>&lt;?    <?= $a + $b; echo PHP_EOL; ?>
<li>&lt;%    <% echo $a + $b; echo PHP_EOL; %>
<li>&lt;?    <? echo $a + $b; echo PHP_EOL; ?>
<li>&lt;script language="php" <script language="php">echo $a + $b; echo PHP_EOL;</script>
</ul>
