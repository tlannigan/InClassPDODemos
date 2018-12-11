<ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php"><i class="fas fa-question-circle"></i> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownArticles" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Articles
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="articles.php">All Articles</a>
                  <?php
                    // 1. Build the query (only grabs categories that also have pages related to them)
                    $q = "SELECT id, category, Summary.total 
                          FROM categories JOIN (SELECT COUNT(*) AS total, 
                                                category_id
                                                FROM pages
                                                GROUP BY category_id) AS Summary
                          WHERE categories.id = Summary.category_id
                          ORDER BY category";
                    
                    // 2. Execute the query (Remember, we are using PDO and not MYSQLI)
                    $stmt = $dbc -> query($q);
                    $category_list = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                    
                    //var_dump($category_list);
                    //exit();
                    
                    foreach($category_list as $k){
                        echo "<a class='dropdown-item' href='articles.php?id={$k['id']}'><span class='badge badge-pill badge-primary'>{$k['total']}</span> {$k['category']}</a>";
                    }
                  ?>
<!--                <a class="dropdown-item" href="portfolio-1-col.html">All Articles</a>
                <a class="dropdown-item" href="portfolio-2-col.html">Common Attacks</a>
                <a class="dropdown-item" href="portfolio-3-col.html">General Web Security</a>-->
              </div>
            </li>
          </ul>