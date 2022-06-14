<?php
    include("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
    }

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    } 
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1    >
            <p id="post-description"><?= $currentPost['description'] ?></p>

            <div class="img-container">
            <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <div>
                <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio facilis optio doloremque omnis nam nihil, similique minima mollitia beatae, nulla corrupti commodi debitis! Ad molestias id quod neque, facere qui!
                Porro velit fugit, excepturi praesentium ipsa sapiente blanditiis officiis quam corrupti quae neque eligendi repudiandae nihil voluptates eveniet eos autem consequatur, deserunt nam quaerat accusantium quo non, recusandae fuga! Eius!
                Ut est autem aperiam illo doloremque pariatur cupiditate adipisci dolorum quo sint. Ab, eligendi ipsam cum iure nobis ducimus, nesciunt nulla ratione similique totam quasi asperiores at mollitia sequi ipsum.
                Rerum voluptatem veniam quia debitis quisquam voluptatibus impedit explicabo, nulla labore aspernatur voluptates eum reprehenderit. Deserunt saepe illo obcaecati ad iste facilis quis aspernatur voluptatem voluptates, odio quo aliquid sequi.
                Accusamus itaque saepe dolorum nemo animi, esse vel temporibus iste tempora ducimus dolores porro mollitia quam sed eum placeat, veritatis accusantium voluptatibus voluptates impedit beatae ab. Adipisci sed tenetur odit.</p>
                <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio facilis optio doloremque omnis nam nihil, similique minima mollitia beatae, nulla corrupti commodi debitis! Ad molestias id quod neque, facere qui!
                Porro velit fugit, excepturi praesentium ipsa sapiente blanditiis officiis quam corrupti quae neque eligendi repudiandae nihil voluptates eveniet eos autem consequatur, deserunt nam quaerat accusantium quo non, recusandae fuga! Eius!
                Ut est autem aperiam illo doloremque pariatur cupiditate adipisci dolorum quo sint. Ab, eligendi ipsam cum iure nobis ducimus, nesciunt nulla ratione similique totam quasi asperiores at mollitia sequi ipsum.
                Rerum voluptatem veniam quia debitis quisquam voluptatibus impedit explicabo, nulla labore aspernatur voluptates eum reprehenderit. Deserunt saepe illo obcaecati ad iste facilis quis aspernatur voluptatem voluptates, odio quo aliquid sequi.
                Accusamus itaque saepe dolorum nemo animi, esse vel temporibus iste tempora ducimus dolores porro mollitia quam sed eum placeat, veritatis accusantium voluptatibus voluptates impedit beatae ab. Adipisci sed tenetur odit.</p>
            </div>  
        </div>

        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
                <ul id="tag-list">
                    <?php foreach($currentPost['tags'] as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <h3 id="categories-title">Categorias</h3>
                <ul id="categories-list">
                    <?php foreach($categories as $category): ?>
                        <li><a href="#"><?= $category ?></a></li>
                    <?php endforeach; ?>  
                </ul>
        </aside>
    </main>                    
    
<?php
    include("templates/footer.php");
?>
