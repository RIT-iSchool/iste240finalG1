<!-- Header -->
<header>
    <nav class="container">
        <a href="<?php echo isset($path) ? $path : ''; ?>index.php" class="logo">UNIX for Web Devs</a>
        <div class="nav-links">
            <a href="<?php echo isset($path) ? $path : ''; ?>index.php">Home</a>
            <a href="<?php echo isset($path) ? $path : ''; ?>why-unix/">About</a>
            <a href="<?php echo isset($path) ? $path : ''; ?>about/">Start Here</a>
            <a href="<?php echo isset($path) ? $path : ''; ?>core-tools/">Core Tools</a>
            <a href="<?php echo isset($path) ? $path : ''; ?>quizzes/">Quiz Center</a>
            <a href="<?php echo isset($path) ? $path : ''; ?>command-lookup/">Command Lookup</a>
            <a href="<?php echo isset($path) ? $path : ''; ?>chmod-simulator/">Fun Zone</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden">
        <a href="<?php echo isset($path) ? $path : ''; ?>index.php">Home</a>
        <a href="<?php echo isset($path) ? $path : ''; ?>why-unix/">About</a>
        <a href="<?php echo isset($path) ? $path : ''; ?>about/">Start Here</a>
        <a href="<?php echo isset($path) ? $path : ''; ?>core-tools/">Core Tools</a>
        <a href="<?php echo isset($path) ? $path : ''; ?>quizzes/">Quiz Center</a>
        <a href="<?php echo isset($path) ? $path : ''; ?>command-lookup/">Command Lookup</a>
        <a href="<?php echo isset($path) ? $path : ''; ?>chmod-simulator/">Fun Zone</a>
    </div>
</header>