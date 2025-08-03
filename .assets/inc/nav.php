<!-- Header -->
<header>
    <nav class="container">
        <a href="<?php echo isset($path) ? $path : ''; ?>index.php" class="logo">UNIX for Web Devs</a>
        <div class="nav-links">
            <a href="<?php echo isset($path) ? $path : ''; ?>index.php">Home</a>
            <a href="<?php echo isset($path) ? $path : ''; ?>about/">About</a>
            <a href="#">Start Here</a>
            <a href="#">Core Tools</a>
            <a href="#">Quiz Center</a>
            <a href="<?php echo isset($path) ? $path : ''; ?>command-lookup/">Command Lookup</a>
            <a href="#">Fun Zone</a>
        </div>
         <!-- Mobile Menu Button -->
        <button id="mobile-menu-button">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </nav>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden">
        <a href="<?php echo isset($path) ? $path : ''; ?>index.php">Home</a>
        <a href="<?php echo isset($path) ? $path : ''; ?>about/">About</a>
        <a href="#">Start Here</a>
        <a href="#">Core Tools</a>
        <a href="#">Quiz Center</a>
        <a href="<?php echo isset($path) ? $path : ''; ?>command-lookup/">Command Lookup</a>
        <a href="#">Fun Zone</a>
    </div>
</header>
