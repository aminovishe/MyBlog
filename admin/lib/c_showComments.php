<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 8:51 PM
 */

require_once 'lib/cxBDD.php'; //done//

$stm = $conn->prepare("SELECT comment.id, comment.contents, comment.creationTimestamp, comment.post_Id, post.title, post.category_Id, category.name FROM post
INNER JOIN comment ON comment.post_Id=post.id
INNER JOIN category ON category.id = post.category_Id
WHERE comment.contents<>''
ORDER BY comment.creationTimestamp DESC");
$stm->execute();
$allComments = $stm->fetchAll(PDO::FETCH_ASSOC);

?>