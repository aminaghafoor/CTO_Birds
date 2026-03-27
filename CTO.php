<!DOCTYPE html>
<html lang="en">
<head>
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CTO</title>
</head>
<body>
   <nav class="navbar">
       <h1 class="heading center">Centrala Trust for Ornithology</h1>
   
    <div class="hamburger" id="hamburger">&#9776;</div>
    <ul class="nav-links" id="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="ViewPosts.php">view posts</a></li>
        <li><a href="RegisterA.php">Register</a></li>
        <li><a href="LoginN.php">Login</a></li>
         <li><a href="CTO.php">Learn More</a></li>
    </ul>
</nav>

<script>       
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>

    <h1>CTO Process Hub</h1>
    <p> Here are the beginner's guidelines about the CTO.
        Here are the instructions of creating your account with CTO. 
        Follow these instructions to become part of CTO community.
    </p> 
    <section class="section-features">
 
        <div class="features card-about">
            <i class="card-icon fa-solid fa-circle-info"></i>
            <h3>About Us</h3>
            <p>Centrala Trust is powered by science, technology, and millions of people
                around the globe-people like you.</p>
        </div> 

        <div class="features card-guide">
            <i class="card-icon fa-solid fa-list-check"></i>
            <h3>Step By Step Guide</h3>
            <p>Here is a step by step guide to 'How We Work'.
            Follow these steps to create your CTO account <br> and become part of our community.</p>
        </div>


        <div class="features card-register">
         <i class="card-icon fa-solid fa-user-plus"></i>
            <h3> 1. Registration</h3>
            <p>Click on the Register page and fill the form.
                Please make sure to enter the valid information.</p>
                <a href="RegisterA.php">Click here to Register now</a>
        </div>

        <div class="features card-login">
           <i class="card-icon fa-solid fa-right-to-bracket"></i>
            <h3>2. Login</h3>
            <p>Create your login credentials.
               Enter a strong username and choose a strong password.
               Select your Role.
               Agree to terms and conditions of CTO.</p>
        </div> 

        <div class="features card-profile">
           <i class="card-icon fa-solid fa-id-badge"></i>
            <h3>3. Your Profile</h3>
            <p>On your profile page, you will see your posts.
               You can edit or delete your post if needed.</p>
        </div>
        
        <div class="features card-post">
            <i class="card-icon fa-solid fa-pen-to-square"></i>
            <h3>4. Create a New Post</h3>
            <p>You can upload a new post with relevent required data.
                After uploading, you will see your post on your profile as well as on View Posts page.
            </p>
        </div>

        <div class="features card-view">
           <i class="card-icon fa-solid fa-eye"></i>
            <h3>5.View Posts</h3>
            <p>On this page, you will see the posts uploaded by all the CTO members.
                There will be relevent data with relevent images. You can't edit or delete the posts of others.
            </p>
        </div>

        <div class="features card-logout">
            <i class="card-icon fa-solid fa-right-from-bracket"></i>
            <h3>6.Logout</h3>
            <p>Once you logout.
                you will be safely signed out of your CTO account.
                After logout, you will be redirected to homepage.</p>
        </div>
 
    </section>
    
  <footer>


    <div class="bottom-footer">
    <p> © 2025 Centrala Trust for Ornithology. <br>
       All Rights Reserved.  <br>
       Developed By Amna</p>
    </div>

</footer>

</body>

</html>