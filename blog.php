<?php
   $db=mysqli_connect('localhost','root','','blog') or die("database is not connected");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <title>RespBlog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="homes.css">
  </head>
  <body>
    <header class="header">
      <a href="#" class="log"><span>Blog</span>Website</a>
      <nav class="nav">
        <a href="home.php">Home</a>
        <a href="home.php">About us</a>
        <a href="home.php">Contact</a>
    </nav>
    <div class="icon">
      <i class="fas fa-bars" id="menu"></i>
        <i class="fas fa-search" id="search"></i>
    </div>
    <form class="search" action="" >
      <input type="search" name="" placeholder="search here" id="searchbox">
      <label for="searchbox" class="fas fa-search"></label>
    </form>
    </header>

    <section class="posts" id="posts">
      <h2>Recent Posts</h2>
         <?php
         $postquery="SELECT * FROM blogtable ORDER BY id DESC; ";
         $runpq=mysqli_query($db,$postquery);
         while($post=mysqli_fetch_assoc($runpq))
         {

           ?>
           <div class="postcontainer">
           <div class="post">
             <img src="<?=$post['image']?>" alt="" class="image">
             <div class="date">
               <i class="far-fa-clock"></i>
               <span><?=date('F jS,Y',strtotime($post['date']))?></span></div>
               <h3 class="title"><?=$post['title']?></h3>
               <p class="text"><?=$post['content']?></p>
  <div class="links">
               <a href="#" class="user">
                <i class="far-fa-user"></i>
                <span>author name</span>
        </div>       </a>

           </div>

         </div>
           <?php
         }
          ?>
        <!-- <div class="post">
           <img src="big-hamburger-with-double-beef-french-fries_252907-8.webp" alt="" class="image">
           <div class="date">
             <i class="far-fa-clock"></i>
             <span>3rd jun 2022</span></div>
             <h3 class="title">Fast Food and wantonness</h3>
             <p class="text">Fast foods are incredibly tasty, juicy, and mouth-filling delights everyone loves. Yet the question arises as to why we love them so much?


We've all been in that situation when, strapped for time or lagging in energy, we give into the tempting convenience, quickness and maybe even the crave-worthy taste of a drive-thru meal. But the short-term rewards are quickly eclipsed by the nagging guilt of consuming food (and we use that term loosely) that, in most cases, provides little to no nutritive benefit and exceeds our allotment of calories, saturated fat, sodium and sugar.

Let's face it: There's nothing fun about entering a Big Mac and fries into your Nutrition Tracker</p>
<div class="links">
             <a href="#" class="user">
              <i class="far-fa-user"></i>
              <span>author name</span>
      </div>       </a>

         </div>

       </div>
      <div class="postcontainer">
         <div class="post">
           <img src="palm-trees-silhouettes-tropical-beach-sunset-modern-vintage-colors-139094492.jpg" alt="" class="image">
           <div class="date">
             <i class="far-fa-clock"></i>
             <span>3rd jun 2022</span></div>
             <h3 class="title">Breathtaking Beach Breaks in Cancun, Mexico</h3>
             <p class="text">It’s not all party and sunbathiCancun is one of the most famous Beach Break destinations in Mexico. This is not only a beautiful tropical destination with stunning beach resorts, turquoise waters, ancient Mayan ruins and the Mesoamerican Reef, but also has some fantastic nightlife!
You’ll love the beach parties and beautiful pools at your beach break in Mexico. Imagine soaking up the sun, visiting Mayan ruins at Tulum and taking a cruise from Cancun to the waters off of Cozumel. Make sure to save some energy for the world-famous nightlife that springs into action once the sun goes down.
ng. Cancun also has some pretty epic cultural activities and adventures you can take part in. Taking a day trip from Cancun is the perfect way to get the most out of your journey, from snorkelling off tropical islands to exploring some of the more fascinating and historic sites in the region.

       </p>
       <div class="links">

             <a href="#" class="user">
              <i class="far-fa-user"></i>
              <span>Author name</span>
             </a>
</div>
         </div>

       </div>
      <div class="postcontainer">
         <div class="post">
           <img src="istockphoto-1047798504-612x612.jpg" alt="" class="image">
           <div class="date">
             <i class="far-fa-clock"></i>
             <span>3rd jun 2022</span></div>
             <h3 class="title">Importance of plant-based protein</h3>
             <p class="text">The Ministry of Food Processing Industries Government of India (MOFPI) and Agricultural and Processed Food Products Export Development Authority (APEDA), along with the Plant Based Foods Industry Association (PBFIA) recently came together for the first Plant Based Foods Summit in New Delhi. The awareness towards the importance of protein in diet in a country with more than 40 percent vegetarian population has led the government to join hands with several private investors in showcasing the need for healthy and sustainable vegetarian sources of protein.</p>
<div class="links">
             <a href="#" class="user">
              <i class="far-fa-user"></i>
              <span>author name</span>
             </a>
</div>
         </div>

       </div>
       <div class="postcontainer">
         <div class="post">
           <img src="download.jpg" alt="" class="image">
           <div class="date">
             <i class="far-fa-clock"></i>
             <span>3rd jun 2022</span></div>
             <h3 class="title">Breathtaking Beach Breaks in Cabo San Lucas, Mexico</h3>
             <p class="text">This desert-filled beach break paradise offers tourists amazing views of the famed Cabo Arch that stretches to the west end of this Mexican hotspot. Cabo San Lucas is renowned for its non-stop band and never sleeps from morning to dawn.
Medano Beach, Cabo San Lucas
Cabo San Lucas is just a short walk or taxi away from Medano Beach, and the most popular nightlife in the area. Medano Beach is one of the only accessible beaches in Cabo, and is home to a number of waterfront bars including Mango Deck, Omega, The Office, and Billygan’s Island! Relax in the clear blue water, and you’ll notice a lot of different sporting activities going on like jet skiing, parasailing, jet-pack flying, and glass-bottom boat tours.
</p>
<div class="links">

             <a href="#" class="user">
              <i class="far-fa-user"></i>
              <span>author name</span>
             </a>
           </div>
         </div>

       </div>-->
    </section>
<script src="script.js" type="text/javascript">
  </script>
  </body>
</html>
