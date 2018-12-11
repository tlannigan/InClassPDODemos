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
        $q = "SELECT id, title, description FROM pages ORDER BY 2";

        // 2. Execute the query (Remember, we are using PDO and not MYSQLI)
        $stmt = $dbc -> query($q);
        $articles = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        echo '<table id="tablesorted" class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>';
        foreach($articles as $article){
            $id = $article['id'];
            $title = $article['title'];
            $description = $article['description'];

            //create a tr for each record
            echo "<tr>
                    <th scope='row'>$title</th>
                    <td>$description</td>
                    <td><a href='article.php?id=$id'>Read Article</a>  
                         <i class='fa fa-eye' aria-hidden='true'></i>
                    </td>
                 </tr>";
        }
        echo '</tbody></table>';

    ?>
</div>