<?php
include "../includes/header.php";
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
  <div class="column">
    <div class="card">
    <h2> Iphone
        </h2>
        <br>
        <img src="../img/iphone.webp" alt="">
        <br>
        <h4> 
            $25
        </h4>
        <button name="buy now" type="submit" id="1" >Buy Now</button>

    </div>
  </div>
  <div class="column">
    <div class="card">
    <h2> Mac-Book
        </h2>
        <br><br>
        <img src="../img/mac.jpeg" alt="">
        <br>
        <h4> 
            $25
        </h4>
        <button name="buy now" type="submit" id="2" >Buy Now</button>
       
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h2> I-Watch
        </h2>
        <br>
        <img src="../img/iwatch.jpeg" alt="">
        <br>
        <h4> 
            $25
        </h4>
        <button  name="buy now" type="submit" id="3" >Buy Now</button>

    </div>
  </div>
 
</div>

