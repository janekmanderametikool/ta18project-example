<?php require('partials/head.php'); ?>

<h1>Riigi lisamine</h1>


<form method="POST" action="/addcountry">

    <input name="country_name">

</form>

<ul>
<?php foreach ( $countries as $country ) { ?>

    <li><?php echo $country->name;?></li>

<?php } ?>
</ul>

<?php require('partials/footer.php'); ?>