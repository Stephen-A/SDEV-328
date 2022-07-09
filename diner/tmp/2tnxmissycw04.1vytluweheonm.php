<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<div class="container">
    <h1>My Diner</h1>
    <h2>Order Part 1</h2>

    <form action="#" method="post" class="form-horizontal">

        <!-- get food -->
        <div class="form-group">
            <label class="col-sm-4 control-label">What food would you like to order?</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="food" id="food" value="<?= ($userFood) ?>">
                <!-- Display error if there is one -->
                <?php if (isset($errors['food'])): ?>
                    <span class="text-danger"><?= ($errors['food']) ?></span>
                <?php endif; ?>
            </div>
        </div>
        <br>
        <!-- get meal -->
        <div class="form-group">
            <label class="col-sm-4 control-label">Select a meal</label>
            <div class="col-sm-4">
                <?php foreach (($meals?:[]) as $meal): ?>
                    <label><input type="radio" name="meal" value="<?= ($meal) ?>"
                                  <?php if ($meal == $userMeal): ?>
                                  checked="checked"
                                  <?php endif; ?>
                    >
                        <?= (ucfirst($meal)) ?></label><br>
                <?php endforeach; ?>
                <?php if (isset($errors['meal'])): ?>
                    <span class="text-danger"><?= ($errors['meal']) ?></span>
                <?php endif; ?>
            </div>
        </div>


        <div class="col-xs-3 ">
            <button class="btn btn-primary" type="submit">Next</button>
        </div>
    </form>
</div>
