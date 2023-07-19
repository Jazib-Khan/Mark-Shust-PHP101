<?php declare(strict_types=1);

    // Requires functions.php file
    // require('classes/Post.php');

    require('vendor/autoload.php');

    use App\Post;

    $title = 'My Blog';

    // Defines a value
    define('MIN_NUM_POSTS', 0);

    // Sets a constant
    const MAX_NUM_POSTS = 100;

    // Array
    $tags = ['php', 'mysql', 'html', 'css', 'javascript'];

    // Associative Array
    $post = [
        'title' => 'My first post',
        'content' => 'Conent for first post',
    ];

    // Calls getAll function from Post class
    $posts = Post::getAll();

    // Counting the number of posts
    $numPosts = count($posts);

    $postText = Post::getText($numPosts);

    // Concatenation
    $numPostsDisplay = "$numPosts $postText";

    // Boolean
    $hasPosts = $numPosts > 0;

    
?>

<!-- Echoes the value of a variable -->
<h1><?= $title ?></h1>

<!-- Gets variable type -->
<p><?= gettype($title) ?></p>

<h2><?= $numPostsDisplay ?> </h2>

<!-- Dumps information about a variable -->
<pre><?php var_dump($posts) ?></pre>

<h3>Minimum: <?= MIN_NUM_POSTS ?></h3>
<h3>Maximum: <?= MAX_NUM_POSTS ?></h3>

<!-- For Loop -->
<?php for ($i = 0; $i < $numPosts; $i++) : ?>
    <?php /* 
        if(str_contains($posts[$i]['content'], 'PHP')) :
            break;

        endif */
    ?>
    <!--- Key:value store -->
    <h3><?= $posts[$i]['title'] ?></h3>
    <p><?= $posts[$i]['content'] ?></p>
    <p>By <?= $posts[$i]['author'] ?></p>
<?php endfor ?>

<!-- If Statement -->
<?php
    if ($numPosts === 3) {
        echo "There are exactly 3 posts";
    } elseif ($hasPosts) {
        echo "Posts exist";
    } else {
        echo "There are no posts";
    } 
?>

<!-- Ternary Statement -->
<?= $hasPosts ? "<p>Posts exist</p>" : "<p>There are no posts</p>" ?>

<!-- Switch Statement -->
<?php
    switch ($numPosts) {
        case 0:
            echo "There are no posts";
            break;
        case 1:
            echo "There is one post";
            break;
        default:
            echo "There are $numPosts posts";
            break;
    }
?>

<!-- Match Statement -->
<?php
    $message = match ($numPosts) {
        0 => "There are no posts",
        1,2, 3 => "There are a few posts",
        default => "There are $numPosts posts",
    };
    echo $message;
?>

<!-- Foreach Statement-->
<?php
    foreach ($tags as $tag) {
        echo "<li>$tag</li>";
    }
?>
<br>

<!-- Foreach Statement (to find current iteration) -->
<?php
    foreach ($tags as $key => $tag) {
        echo "<li>$key: $tag</li>";
    }
?>



