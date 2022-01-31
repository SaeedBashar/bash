<?php
    $st = $pdo->prepare("select * from users where user_id=:id");
    $st->bindValue(':id', $_SESSION['tmpuser']);
    $st->execute();
    $user = $st->fetch(PDO::FETCH_ASSOC);

    $post_st = $pdo->prepare("select * from users_post where user_id=:id");
    $post_st->bindValue(':id', $_SESSION['tmpuser']);
    $post_st->execute();
    $posts = $post_st->fetchAll(PDO::FETCH_ASSOC);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $postText = $_POST['statusText'];
        $postImg  = $_FILES['statusImg'] ?? null;
        $postVis  = $_POST['visibility'];
        $postTime = date('Y/m/d h:i:s');
        $userId = $_SESSION['tmpuser'];

        $path= '';
        if($postImg){
            $path = strval(time()).$postImg['name'];

            move_uploaded_file($postImg['tmp_name'], '../../lib/Assets/post-img/'.$path);
        }

            $ud_st = $pdo->prepare('INSERT INTO users_post(user_id, post_text, post_pic, post_time, visibility) VALUES(:id, :ptext, :ppic, :ptime, :vis)');
            $ud_st->bindValue(':id', $userId);
            $ud_st->bindValue(':ptext', $postText);
            $ud_st->bindValue(':ppic', $path);
            $ud_st->bindValue(':ptime', $postTime);
            $ud_st->bindValue(':vis', $postVis);

            $ud_st->execute();

    }
?>
<style>
    .left .card {
        width: 90%;
        margin: auto;
    }
    .card {
        width: 100%;
    }

    .timeline-img {
        display: block;
        object-fit: cover;
        width: 100%;
        height: 80px;
    }

    .timeline-user-img {
        display: block;
        object-fit: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .status-update, .timeline {
        width: 90%;
    }
</style>
    
   <div class="row">
       <div class="col-4 left">
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <h5 class="card-title">About</h5>
                    <div class="info">
                        <small>Name : <?php echo $user['user_name'] ?></small><br/>
                        <small>Email : <?php echo $user['email'] ?></small><br/>
                        <small>Birth Date : <?php echo $user['birth_date'] ?></small><br/>
                        <small>Gender : <?php echo $user['gender'] ?></small><br/>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Photos</h5>
                    <div class="row">
                        <div class="col-4 mt-2 mb-2">
                            <!-- <img class="timeline-img" src="unknown.png" alt="user image"> -->
                            <img class="timeline-img" src="<?php echo '../../lib/Assets/img/'.$user['image'] ?>"  alt="">
                        </div>
                        <div class="col-4 mt-2 mb-2">
                            <img class="timeline-img" src="unknown.png" alt="">
                        </div>
                        <div class="col-4 mt-2 mb-2">
                            <img class="timeline-img" src="unknown.png" alt="">
                        </div>
                        <div class="col-4 mt-2 mb-2">
                            <img class="timeline-img" src="unknown.png" alt="">
                        </div>
                        <div class="col-4 mt-2 mb-2">
                            <img class="timeline-img" src="unknown.png" alt="">
                        </div>
                        <div class="col-4 mt-2 mb-2">
                            <img class="timeline-img" src="unknown.png" alt="">
                        </div>
                        <div class="col-4 mt-2 mb-2">
                            <img class="timeline-img" src="unknown.png" alt="">
                        </div>
                        <div class="col-4 mt-2 mb-2">
                            <img class="timeline-img" src="unknown.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="col-8 right">
           <div class="status-update mt-4 mb-4 border p-4">
                <div class="mb-2"><b style="font-size: 20px;"><i class="fa fa-newspaper"></i>Update Status</b></div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                    <textarea class="form-control" name="statusText" cols="30" rows="10" placeholder="What's on your mind,<?php echo substr($user['user_name'], strpos($user['user_name'], " ")) ?>?"></textarea>
                    <div class="row mb-3 mt-3">
                        <div class="col">
                        <select name="visibility" class="form-control">
                            <option value="private">Private</option>
                            <option value="public">Public</option>
                        </select>
                        </div>
                        <div class="col">
                            <input class="form-control" type="file" name="statusImg">
                        </div>
                    </div>
                    <button class="btn btn-info btn-block">Post</button>
                </form>
           </div>
           <div class="timeline border mt-5">
                <?php if($posts): ?>
                    <?php foreach($posts as $post): ?>
                        <div class="timeline-item m-2 mt-5 border">
                            <div class="top-part">
                                <div class="row">
                                    <div class="col-2">
                                        <img class="timeline-user-img" src="<?php echo '../../lib/Assets/img/'.$user['image'] ?>"  alt="">
                                    </div>
                                    <div class="col-8">
                                        <small><b><?php echo $user['user_name'] ?></b> updated his cover photo <br/><?php echo $post['post_time'] ?>.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mid-part">
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <?php 
                                                echo $post['post_text']
                                            ?>
                                        </div>
                                        <img src="<?php echo '../../lib/Assets/post-img/'.$post['post_pic']; ?>" style="width: 100%;margin-top:5px;" alt="">
                                    </div>
                                </div>
                                <hr width="90%" noshade>
                                <div class="row reaction-row">
                                    <div class="col-3 offset-2"><a href="#"><i class="fa fa-thumbs-up mr-1"></i>like</a></div>
                                    <div class="col-4 offset-2"><a href="#"><i class="fa fa-comment mr-1"></i>comment</a></div>
                                </div>
                                <hr width="90%" noshade>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
           </div>
       </div>
   </div>