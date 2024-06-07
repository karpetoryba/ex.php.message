<?php require_once 'parts/header.php';

$connectDataBase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");
$request = $connectDataBase->prepare("SELECT * FROM users");
$request->execute();
$users = $request->fetchAll(PDO::FETCH_ASSOC);
?>



<div id="post-message" class="card" style="width: 25rem;">
    <div class="card-body">
        <ul class="formulary" id="forme">
            <?php foreach ($users as $user) : ?>
                <li>
                    <strong><?php echo $user['username']; ?></strong>
                    <ul>
                        <?php echo $user['email']; ?>
                        <li>Comment : <?php echo $user['message']; ?></li>
                        <li>Assessment:
                            <?php
                            $stars = intval($user['assessment']);
                            for ($i = 0; $i < 5; $i++) {
                                if ($i < $stars) {
                                    echo '★';
                                } else {
                                    echo '☆';
                                }
                            }
                            ?>
                        </li>    
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>



<?php require_once 'parts/footer.php' ?>