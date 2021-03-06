<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ($BASE) ?>/styles/styles.css">

    <title>My Diner</title>
</head>
<body>
<div class="container">
    <h1>My Diner</h1>
    <h2>Order Part 1</h2>

    <form action="" method="post" class="form-horizontal">

        <!-- get food -->
        <div class="form-group">
            <label for="food" class="col-sm-4 control-label">What food would you like to order?</label>
            <div class="col-sm-4"><input class="form-control" type="text"
                                         name="food" id="food"></div>
        </div>
        <br>

        <!-- get meal -->
        <div class="form-group">
            <label class="col-sm-4 control-label">Select a meal</label>
            <div class="col-sm-4">
                <label><input type="radio" name="meal" value="breakfast"> Breakfast</label><br>
                <label><input type="radio" name="meal" value="lunch"> Lunch</label><br>
                <label><input type="radio" name="meal" value="dinner"> Dinner</label><br>
            </div>
        </div>

        <div class="col-xs-3 ">
            <button class="btn btn-primary" type="submit">Next</button>
        </div>
    </form>
</div>
</body>
</html>