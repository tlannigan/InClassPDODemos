<div class="container">
  <nav aria-label="breadcrumb" class="my-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="articles.php">Articles</a></li>
      <li class="breadcrumb-item active" aria-current="page">Article</li>
    </ol>
  </nav>  
  <?php
  
    if(isset($_GET['id']) && (is_numeric($_GET['id']))){
        $id = $_GET['id'];
        // Get single article based on ID
        $q = "SELECT id, title, description, content 
              FROM pages WHERE id = $id ORDER BY 2";
        
        $stmt = $dbc -> query($q);
        $article = $stmt -> fetch(PDO::FETCH_ASSOC);
        //var_dump($article);
        
        echo "<h1 class='my-4'>{$article['title']}</h1>";
        echo "<p>{$article['description']}</p>";
        echo "<div>{$article['content']}</div>";
        
    }else{
        // Show an alert
        echo "<h3 class='my-4'>Error retrieving article</h3>";
        echo "<div class='alert alert-danger my-4'>
                <strong>Warning!</strong> This page has been accessed in error! <br>
                <a href='articles.php'>View all articles</a>
              </div>";
    }
    
  ?>
  
</div>