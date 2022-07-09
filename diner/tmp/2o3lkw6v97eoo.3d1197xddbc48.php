<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<body>
<div class="container">
    <h1>My Diner</h1>
    <h2>Meal Order Part 2</h2>

    <form action="orderSummary" method="post" class="form-horizontal">

        <!-- get condiments -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Select condiments</label>
            <div class="col-sm-4">
                <label><input type="checkbox" name="conds[]" value="ketchup"> Ketchup</label><br>
                <label><input type="checkbox" name="conds[]" value="mayo"> Mayo</label><br>
                <label><input type="checkbox" name="conds[]" value="mustard"> Mustard</label><br>
                <label><input type="checkbox" name="conds[]" value="sriracha"> Sriracha</label><br>
            </div>

        </div>
        <div class="col-xs-3 ">
            <button class="btn btn-primary" type="submit">Next</button>
        </div>
    </form>
</div>
</body>
</html>