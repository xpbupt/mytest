<?php
  require('config.php');

   $create_at = isset($_POST['create_at']) ? $_POST['create_at'] : '';
   $tweetid = isset($_POST['tweetid']) ? $_POST['tweetid'] : '';
   $source = isset($_POST['source']) ? $_POST['source'] : '';
   $text = isset($_POST['text']) ? $_POST['text'] : '';
   $name = isset($_POST['username']) ? $_POST['username'] : '';
   $userid = isset($_POST['userid']) ? $_POST['userid'] : '';
   $resposts = isset($_POST['resposts']) ? $_POST['resposts'] : '';
   $comments = isset($_POST['comments']) ? $_POST['comments'] : '';

   $sql = "insert into tweets (name, tweetid, userid, source, tweettext, create_at, resposts, comments) values('$name', '$tweetid', '$userid', '$source', '$text', '$create_at', '$resposts', '$comments')";
   $res = mysql_query($sql, $con);
   // echo $sql."\n";
   if ($res) {
        echo 'insert success!'."\n";
   } else {
        echo 'error!';
   }
  ?>