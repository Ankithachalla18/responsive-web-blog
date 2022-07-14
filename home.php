<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
    <a href="#home">Home</a>
    <a href="#about">About us</a>
    <a href="#contact">Contact</a>
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
<section class="home" id="home">
  <div class="content">
    <h3>Explore your Knowledge</h3>
    <p>Don’t focus on having a great blog. Focus on producing a blog that’s great for your readers</p>
    <a href="create.php" class="btn">create blogs</a>
    <a href="blog.php" class="btn">view blogs</a>
  </div>
</section>
<section class="container" id="about">
  <h2> About Us</h2>
  <p >It is a blogging website. In this website we will share the information about various topics which will help you to expand your knowledge.
It is used to share information about a given topic and helps you to become an expert in an industry.
 blog is typically a section of your business's website -- but, unlike the rest of your website, you need to update the blog section frequently by adding new posts. Additionally, your blog is a tool that allows you to engage more with an audience, either by analyzing how many readers share your blog posts on social, or by allowing readers to comment on your individual posts. In this way, a blog is more like a two-way conversation than the rest of your website. However, a blog can also be an entire website, and often is, if the blog is for personal use alone.
    </p>
</section>
<section class="contact" id="contact">
  <h2>Contact Us</h2>
  <p> If you have any suggestions,or any ideas contact us at</p>
      <form class="" action="" method="post">
        <div class="inputbox">
          <input type="text" placeholder="name"name="" value="">
          <input type="email" placeholder="email" name="" value="">
        </div>
        <div class="inputbox">
          <input type="number" placeholder="number" name="" value="">
          <input type="text" placeholder="subject" name="" value="">
        </div>
        <textarea name="" placeholder="message" rows="10" cols="30"></textarea>
        <input type="submit" name="" value="send message" class="btn">
      </form>
</section>

<script src="script.js" type="text/javascript">
</script>
  </body>
</html>
