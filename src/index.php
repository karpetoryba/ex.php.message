<?php require_once './parts/header.php';?>
<div class="container">
    <form class="text-center m-4" action="./scripts/create-post.php" method="POST">
        <h2>Post your comment</h2>
        <div class="form">
            <input type="text" class="form-control m-5" id="username" name="username" placeholder="Enter username" required>
            <input type="email" class="form-control m-5" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            <textarea class="form-control m-5" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Your commentary" required></textarea>
            <div class="stars">
            <input type="radio" id="star5" name="assessment" value="5"><label for="star5">★</label>
            <input type="radio" id="star4" name="assessment" value="4"><label for="star4">★</label>
            <input type="radio" id="star3" name="assessment" value="3"><label for="star3">★</label>
            <input type="radio" id="star2" name="assessment" value="2"><label for="star2">★</label>
            <input type="radio" id="star1" name="assessment" value="1"><label for="star1">★</label>
        </div>
            <button class="btn btn-success center m-2" type="submit">Enter</button>
        </div>
    </form>
</div>
<?php require_once './parts/footer.php'; ?>
