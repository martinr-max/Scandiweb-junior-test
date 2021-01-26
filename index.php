<?php
ob_start();

include('bootstrap.php');
include('product.php');

//header starts

$title = 'Products list';
$headLine = "Product List";
$styleLink = "main.css";
$scriptUrl = 'index.js';

//Header ends

$productsFetch = new Product();

$dvds = $productsFetch->displayDvds();
$books = $productsFetch->displayBooks();
$furniture = $productsFetch->displayFurniture();
if(isset($_POST['delete']) && isset($_POST['checkbox'])) {
  $productsFetch->deleteProduct();
}

include_once('header/header.php'); ?>
<header>
  <h3> Product list </h3>
    <div class="spacer"></div>
        <div class="buttons">
        <input
         type='button'
         value='ADD'
         id='addButton'
         class='btn btn-outline-success'/>
        <input
         name='delete'
         form='productsList'
         type='submit'
         class='btn btn-outline-danger'
         value='DELETE'/>
        </div>
      </header>
      <hr>
      <section>
        <form class="" action="" name="productsList" method="post" id="productsList">
          <div class="grid-container">
          <?php include_once('productsGrid.php') ?>
        </div>
      </form>
    </section>
    <?php include('footer.php')  ?>
