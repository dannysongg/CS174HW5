<h1><a href="fix_1.php">XSS Attack</a></h1>
<form  action = "fix_1.php">
    <input id='post-title' name="input" placeholder="Comment" type="text"/>
    <button>Submit</button>
</form>

<h2>Comments</h2>

<?php
    if(isset($_REQUEST['input'])){
        $safeString = htmlentities($_REQUEST['input']);
        $safeString = str_ireplace("<", "&lt;", $safeString);
        $safeString = str_ireplace(">", "&gt;", $safeString);
        file_put_contents("fixedComments.txt", $safeString . "\n", FILE_APPEND);
    }
    foreach(file("fixedComments.txt") as $comment){
        ?><p><?=$comment?></p>
        <?php
    }

    