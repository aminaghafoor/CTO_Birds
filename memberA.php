<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'member') {
    header("Location: loginN.php");
    exit();
}
  
$conn = new mysqli('localhost', 'root', '', 'amna');
$user_id = $_SESSION['user_id'];

// Fetch posts by this member
$stmt = $conn->prepare("SELECT observations.*, newuser.username FROM observations JOIN newuser ON observations.user_id = newuser.id WHERE observations.user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member | CTO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
   <nav class="navbar">
       <h1 class="heading center">Centrala Trust for Ornithology</h1>
   
    <div class="hamburger" id="hamburger">&#9776;</div>
    <ul class="nav-links" id="nav-links">
        <li><a href="memberA.php">My Profile</a></li>
        <li><a href="viewpostA.php">View Posts</a></li>
        <li><a href="newpostA.php">New Post</a></li>
    </ul>
</nav>
  
 <script>       
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>

    </nav>

  </header>

<div class="welcome-member">
  <h2>Welcome Member: <?= htmlspecialchars($_SESSION['username']) ?></h2>
  <p>You are logged in as a member. Below are your posts:</p>
</div>

 <section class="viewpost-section"> 
 <?php while ($row = $result->fetch_assoc()): ?>

<div class="post-card" id="post-<?= $row['id'] ?>">
  <h3 class="welcome-member">
    <?= htmlspecialchars($row['bird']) ?> spotted in <?= htmlspecialchars($row['location']) ?>
  </h3>

  <p><strong>By:</strong> <?= htmlspecialchars($row['username']) ?> | <?= $row['date'] ?> <?= $row['time'] ?></p>

  <p><strong>Activity:</strong>
    <?= htmlspecialchars($row['activity']) ?> | Duration: <?= $row['duration'] ?> mins
  </p>

  <p><strong>Comments:</strong>
    <span class="comment"><?= htmlspecialchars($row['comments']) ?></span>
  </p>


<div class="post-image">
   <?php if ($row['image']): ?>
    <img src="<?= htmlspecialchars($row['image']) ?>" alt="Bird Image" width="200" height="200"  />
   <?php endif; ?>
  </div>

<div class="post-actions">
   <button class="new-button" onclick="editPost(<?= $row['id'] ?>)">Edit</button>
   <button class="new-button" onclick="deletePost(<?= $row['id'] ?>)">Delete</button>
 </div> 

</div>

 <?php endwhile; ?>

 <script src="delete.js"></script>

   </section>

   <div class="logout-container">
      <form action="Logout.php" method="post">
        <button class="exit" type="submit">Logout</button>
      </form>
</div>

   <div class="bottom-footer">
    <p> © 2025 Centrala Trust for Ornithology. <br>
       All Rights Reserved.  <br>
       Developed By Amna</p>
    </div>

 
</body>
</html>