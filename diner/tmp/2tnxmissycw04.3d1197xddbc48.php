<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<div class="container">
    <h1>My Diner</h1>
    <h2>Meal Order Part 2</h2>

    <form action="#" method="post" class="form-horizontal">

        <!-- get condiments -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Select condiments</label>
            <div class="col-sm-4">
                <?php foreach (($condiments?:[]) as $condiment): ?>
                    <label><input type="checkbox" name="conds[]" value="<?= ($condiment) ?>"> <?= (ucfirst($condiment)) ?></label><br>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-xs-3 ">
            <button class="btn btn-primary" type="submit">Next</button>
        </div>
    </form>
</div>