<h1><a href="attack_1.php">XSS Attack</a></h1>
<form  action = "attack_1.php">
    <input id='post-title' name="input" placeholder="Comment" type="text"/>
    <button>Submit</button>
</form>

<h2>Comments</h2>

<?php
    if(isset($_REQUEST['input'])){
        file_put_contents("comments.txt", $_REQUEST['input'] . "\n", FILE_APPEND);
    }
    foreach(file("comments.txt") as $comment){
        ?><p><?=$comment?></p>
        <?php
    }

    