<?php
  foreach($books as $book) { ?>
  <div id="product_card">
    <input
      class='form-check-input'
      name='checkbox[<?php echo $book['bookId'] ?>]'
      type='checkbox' value=<?php echo $book['bookId'] ?>/>
    <p> <?php echo $book['sku']; ?> </p>
    <p> <?php echo $book['name']; ?> </p>
    <p> $ <?php echo $book['price'];  ?> </p>
    <p> Weight: <?php echo $book['weight'];  ?> </p>
  </div>
  <?php }

  foreach($dvds as $dvd) { ?>
  <div id="product_card">
    <input
      class='form-check-input'
      name='checkbox[<?php echo $dvd['dvdId'] ?>]'
      type='checkbox' value=<?php echo $dvd['dvdId'] ?>/>
    <p> <?php echo $dvd['sku']; ?> </p>
    <p> <?php echo $dvd['name']; ?> </p>
    <p> $ <?php echo $dvd['price'];?> </p>
    <p> size: <?php echo $dvd['size'];?> </p>
  </div>
  <?php }

  foreach($furniture as $furn) { ?>
  <div id="product_card">
    <input
      class='form-check-input'
      name='checkbox[<?php echo $furn['furnitureId'] ?>]'
      type='checkbox' value=<?php echo $furn['furnitureId'] ?>/>
    <p> <?php echo $furn['sku']; ?> </p>
    <p> <?php echo $furn['name']; ?> </p>
    <p> $ <?php echo $furn['price'];  ?> </p>
    <p> Dimentions: <?php echo $furn['height']; ?> x
                    <?php echo $furn['length']; ?> x
                    <?php echo $furn['width']; ?>
    </p>
  </div>
  <?php } ?>
