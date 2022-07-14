<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <title>Responsive Blog</title>
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
   <section class="create">
        <h2>Add Blogs</h2>
        <form class="createform" action="db.php" method="post">
           <label for="topic"><b>Topic</b></label>
           <input type="text" name="topic" value="" required>
           <br>
           <br><label for="title"><b>Title</b></label>
           <input type="text" name="title" value="" required>
           <br>
          <br> <label for="matter"><b>Content</b></label>
           <textarea name="matter" rows="10" cols="80" required></textarea>
           <br>
           <br><label for="uploadimage"><b>Uploadimage</b></label>
           <input type="file" name="uploadimage" value="" required>
           <br>
           <br><input type="submit" name="" value="submit" class="btn">
        </form>
   </section>
    <script src="script.js" type="text/javascript">
    </script>
  </body>
</html>
