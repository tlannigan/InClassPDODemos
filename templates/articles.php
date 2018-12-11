<div class="container">
    <nav aria-label="breadcrumb" class="my-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="articles.php">Articles</a></li>
        <li class="breadcrumb-item active" aria-current="page">Article</li>
      </ol>
    </nav>

    <h1 class='my-4'>Articles</h1>

    <?php
      if(isset($_GET['id']) && (is_numeric($_GET['id']))){
          $id = $_GET['id'];
          $q = "SELECT id, title, description FROM pages WHERE category_id = $id ORDER BY 2";
      }else{
          // Get all the categories
          $q = "SELECT id, title, description FROM pages";
      }

      // 2. Execute the query (Remember, we are using PDO and not MYSQLI)
      $stmt = $dbc -> query($q);
      $articles = $stmt -> fetchAll(PDO::FETCH_ASSOC);

      echo "<div class='row'>";
      foreach($articles as $k){
          echo "<div class='col-md-6 col-lg-4 mb-4'>
                  <div class='card h-100'>
                    <h4 class='card-header'>{$k['title']}</h4>
                    <div class='card-body'>
                      <p class='card-text'>{$k['description']}</p>
                    </div>
                    <div class='card-footer'>
                      <a href='article.php?id={$k['id']}' class='btn btn-primary'>Read More</a>
                    </div>
                  </div>
                </div>";
      }

      echo "</div>";
    ?>
  
</div>