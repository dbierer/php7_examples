<?php // alternate tags removed ?>
<?php ini_set('asp_tags', 1); ?>
<?php ini_set('short_open_tag', 1); ?>

<ul>
<li><?php echo "'<?php' Always works!\n"; ?>
<li><?= "'<?=' Always works too\n"; ?>
<li><% echo "'< %' works in php 5.* and below\n"; %>
<li><? echo "'<?' works in php 5.* and below\n"; ?>
<li><script language="php">echo "HTML tags work\n"; </script>
</ul>
