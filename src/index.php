<?php require_once './parts/header.php';?>
<div class="container">
    <form class="text-center m-4" action="./scripts/create-post.php" method="POST">
        <h2>Post your comment</h2>
        <div class="form">
            <input type="text" class="form-control m-5" id="username" name="username" placeholder="Enter username" required>
            <input type="email" class="form-control m-5" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            <textarea class="form-control m-5" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Your message" required></textarea>
            <button class="btn btn-success center m-2" type="submit">Enter</button>
        </div>
    </form>
</div>
<?php require_once './parts/footer.php'; ?>
