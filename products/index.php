<?php
include "../includes/header.php";
include "../includes/db.php";

?>

<style>
 * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
    margin-top:20px;
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {
    margin: 0 -5px;
    margin-top:0px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

button{
    background-color:#6362ad;
    color:white;
    padding: 5px;
    border-radius:20px;
}
img{
    max-width: 80%;
    min-width: 80%;
}
</style>

<div class="row">
    <?php
     $product = "SELECT * FROM `products` ";
            $product_run=mysqli_query($conn,$product);
            if(mysqli_num_rows($product_run)>0){
                foreach($product_run as $product)
                {
                    ?>
  <div class="column">
    <div class="card">
    <h2> <?php echo $product["name"];?>
        </h2>
        <br>
        <img src="<?php echo $product['photo'] ?>" alt="">
        <br>
        <h4> 
            $<?php echo $product["price"];?>
        </h4>
        <a href="../cart?id=<?php echo $product["id"];?>"> <button name="buy now" type="submit" >Buy Now</button></a>

    </div>
  </div>
  <?php
                }
            }
  ?>
 
</div>

