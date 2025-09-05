<header>
  <nav class="navbar">
    <div class="logo">⚡ LOGO</div>

    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>

    <div class="menu-toggle" id="menu-toggle">☰</div>
  </nav>
</header>



<script>
  const menuToggle = document.getElementById('menu-toggle');
  const navLinks = document.querySelector('.nav-links');

  menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
  });
</script>
<link rel="stylesheet" href="style.css">