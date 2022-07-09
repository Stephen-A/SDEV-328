<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<h1>Order Summary</h1>
<h2>Order Summary</h2>
<h3>Thank you for your Order!</h3>
<p>Order: <?= ($SESSION['food']) ?> for <?= ($SESSION['meal']) ?></p>
<p>Condiments: <?= ($SESSION['conds']) ?></p>

<a href="<?= ($BASE) ?>">Home</a>