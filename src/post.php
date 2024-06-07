<?php


require_once 'parts/header.php';

$connectDataBase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");
$connectDataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$request = $connectDataBase->prepare("SELECT * FROM users");
$request->execute();
$users = $request->fetchAll(PDO::FETCH_ASSOC);
?>



<div id="post-message" class="card" style="width: 50rem;">
    <div class="card-body">
        <ul class="formulary" id="forme">
            <?php foreach ($users as $user) : ?>
                <li>
                    <strong><?php echo htmlspecialchars($user['username']); ?></strong>
                    <ul>
                        <?php $emails = explode(";", $user['email']); ?>
                        <?php if (!empty($emails)) : ?>
                            <li>Email</li>
                            <ul>
                                <?php foreach ($emails as $email) : ?>
                                    <li><?php echo htmlspecialchars($email); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <li>Comment :</li>
                        <li><?php echo htmlspecialchars($user['message']); ?></li>
                    </ul>
                    <form action="submit_rating.php" method="POST">
        <div class="stars">
            <input type="radio" id="star5" name="rating" value="5"><label for="star5">★</label>
            <input type="radio" id="star4" name="rating" value="4"><label for="star4">★</label>
            <input type="radio" id="star3" name="rating" value="3"><label for="star3">★</label>
            <input type="radio" id="star2" name="rating" value="2"><label for="star2">★</label>
            <input type="radio" id="star1" name="rating" value="1"><label for="star1">★</label>
        </div>
        <input type="submit" value="Submit">
    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>



<?php require_once 'parts/footer.php' ?>