<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<body>
<div class="container">
    <h1>Welcome to my diner!</h1>
    <p>Welcome to my diner, serving the world's best diner foods!</p>
    <img src="images/diner.jpg" alt="picture of diner"><br>
    <ul class="pt-3">
        <li><a href="breakfast">Breakfast</a></li>
        <li><a href="lunch">Lunch</a></li>
        <li><a href="dinner">Dinner</a></li>
    </ul>

    <a href="order"><button class="btn btn-primary">Place Order</button></a>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>