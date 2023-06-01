<?php
include "../includes/header.php";
include "../includes/db.php";
if(isset($_GET['id'])){
$id=$_GET['id'];
            $product = "SELECT * FROM `products` WHERE `id`='$id' ";
            $product_run=mysqli_query($conn,$product);
            if(mysqli_num_rows($product_run)>0){
                foreach($product_run as $product)
                {
                
                   
?>
<style>section {
  font-family: "Inter", sans-serif;
}
</style>

<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

<script type="tailwind-config">
  {
  theme: {
    extend: {
      colors: {
        gray: colors.blueGray,
        pink: colors.fuchsia,  
      }
    }
  }
}
</script>


<!-- Snippet -->
<section class="flex flex-col justify-center antialiased text-gray-600 min-h-screen p-4">
    <h1 class="text-xl font-bold text-gray-900 mb-1" style="  text-align: center;">CheckOut Product</h1>
  <div class="h-full">
      
    <!-- Card -->
    <div class=" mx-auto">
      <div class="bg-white shadow-lg rounded-lg mt-9">
        <header class="text-center px-5 pb-5">
      <img class="inline-flex -mt-9 w-[72px] h-[72px] fill-current rounded-full border-4 border-white box-content shadow mb-3" viewBox="0 0 72 72"src="<?php echo $product['photo'] ?>"/>
          <!-- Card name -->
          <h3 class="text-xl font-bold text-gray-900 mb-1"><?php echo $product['name'] ?></h3>
          <div class="text-sm font-medium text-gray-500">This product is avaliable temporarily</div>
        </header>
        <!-- Card body -->
        <div class="bg-gray-100 text-center px-5 py-6">
          <div class="text-sm mb-6"><strong class="font-semibold">$<?php echo $product['price'] ?></strong> for One

<select name="quantity" id="quantity">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select></div>
          <form class="space-y-3">
            <div class="flex shadow-sm rounded">
           
            </div>
            <button type="submit" disabled class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-indigo-500 hover:bg-indigo-600 text-white focus:outline-none focus-visible:ring-2">Pay Now(Not Available)</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
}
}
    
}
?>
