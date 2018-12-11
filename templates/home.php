    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/slide1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><strong>Books</strong></h3>
              <p>Look at these books bitch.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/slide2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><strong>More Fucken Books</strong></h3>
              <p>There's a lot of books.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/slide3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><strong>Holy Books</strong></h3>
              <p>Jesus Christ there's a lot of books.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <div class="container">
      <h1 class="my-4">Welcome to Knowledge is Power</h1>
      <?php
        // 1 Build the query: return 3 random pages
        $q = "SELECT id, title, description
              FROM pages ORDER BY RAND() LIMIT 3";
        $stmt = $dbc -> query($q);
        $article = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        
        echo "<div class='row'>";
        foreach($article as $k){
            echo "<div class='col-lg-4 mb-4'>
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
      