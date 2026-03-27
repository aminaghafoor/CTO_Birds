<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'amna');



$search = isset($_GET['search']) ? "%" . $_GET['search'] . "%" : "%";

$stmt = $conn->prepare("SELECT observations.*, newuser.username FROM observations JOIN newuser ON observations.user_id = newuser.id WHERE comments LIKE ?");
$stmt->bind_param("s", $search);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bird Sightings | CTO</title>
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
<div class="center-logout">
  <form method="get" class="search-button">
       <input type="text" name="search" placeholder="Search comments" />
       <button type="submit">Search</button>
  </form>
</div>

  </header>

<section class="viewpost-section">
  <?php while ($row = $result->fetch_assoc()): ?>
  
  <div class="post-card">
    <h3 class="post-heading">
      <?= htmlspecialchars($row['bird']) ?> spotted in <?= htmlspecialchars($row['location']) ?>
    </h3>

    <p>
      <strong>By:</strong> <?= htmlspecialchars($row['username']) ?> | 
      <?= $row['date'] ?> <?= $row['time'] ?>
    </p>

    <p>
      <strong>Activity:</strong> <?= htmlspecialchars($row['activity']) ?> | 
      Duration: <?= $row['duration'] ?> mins
    </p>

    <p class="comment">
      <?= htmlspecialchars($row['comments']) ?>
    </p>
    
    <div class="post-image">
      <?php if ($row['image']): ?>
        <img src="<?= htmlspecialchars($row['image']) ?>" alt="Bird Image" class="responsive-img" />
      <?php endif; ?>
    </div>
  </div>

  <?php endwhile; ?>
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