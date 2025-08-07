<!-- 
    Navigation Header Component
    
    This navigation component provides the main site header with responsive design.
    It's designed to be included in all pages via PHP include.
    
    Features:
    - Brand logo with home link
    - Primary navigation menu for desktop
    - Mobile-responsive hamburger menu
    - Dynamic path handling using PHP $path variable
    - SVG icons for mobile menu toggle
    
    Structure:
    - Desktop navigation bar with horizontal links
    - Mobile menu button with hamburger icon
    - Hidden mobile menu that toggles via JavaScript
-->
<header>
    <!-- Main Navigation Container -->
    <!-- Uses container class for responsive width and centering -->
    <nav class="container">
        <!-- Brand Logo/Home Link -->
        <!-- Dynamic path handling: checks if $path variable exists for proper relative linking -->
        <a href="<?php echo isset($path) ? $path : ''; ?>index.php" class="logo">UNIX for Web Devs</a>
        
        <!-- Desktop Navigation Links -->
        <!-- Primary navigation menu visible on desktop screens -->
        <div class="nav-links">
            <a href="<?php echo isset($path) ? $path : ''; ?>index.php">Home</a> <!-- Home - Main landing page -->
            <a href="<?php echo isset($path) ? $path : ''; ?>why-unix/">About</a> <!-- About - Information about UNIX and its importance -->
            <a href="<?php echo isset($path) ? $path : ''; ?>about/">Start Here</a> <!-- Start Here - Beginner-friendly introduction -->
            <a href="<?php echo isset($path) ? $path : ''; ?>core-tools/">Core Tools</a> <!-- Core Tools - Essential UNIX commands and utilities -->
            <a href="<?php echo isset($path) ? $path : ''; ?>quizzes/">Quiz Center</a> <!-- Quiz Center - Interactive learning assessments -->
            <a href="<?php echo isset($path) ? $path : ''; ?>command-lookup/">Command Lookup</a> <!-- Command Lookup - Reference tool for UNIX commands -->
            <a href="<?php echo isset($path) ? $path : ''; ?>chmod-simulator/">Fun Zone</a> <!-- Fun Zone - Interactive tools and simulators -->
        </div>

        <!-- Mobile Menu Toggle Button -->
        <!-- Hamburger menu button for mobile/tablet devices -->
        <!-- Hidden on desktop, visible on smaller screens via CSS -->
        <button id="mobile-menu-button">
            <!-- Hamburger Icon (Three horizontal lines) -->
            <!-- SVG icon for better scalability and styling control -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /> <!-- Three horizontal lines representing menu icon -->
            </svg>
        </button>
    </nav>

    <!-- Mobile Navigation Menu -->
    <!-- Collapsible menu for mobile and tablet devices -->
    <!-- Hidden by default, toggled via JavaScript when hamburger button is clicked -->
    <div id="mobile-menu" class="hidden">
        <!-- Mobile Menu Links - Same navigation as desktop but in vertical layout -->
        <!-- Each link uses the same dynamic path handling as desktop navigation -->
        <a href="<?php echo isset($path) ? $path : ''; ?>index.php">Home</a> <!-- Home - Main landing page -->
        <a href="<?php echo isset($path) ? $path : ''; ?>why-unix/">About</a> <!-- About - Information about UNIX and its importance -->
        <a href="<?php echo isset($path) ? $path : ''; ?>about/">Start Here</a> <!-- Start Here - Beginner-friendly introduction -->
        <a href="<?php echo isset($path) ? $path : ''; ?>core-tools/">Core Tools</a> <!-- Core Tools - Essential UNIX commands and utilities -->
        <a href="<?php echo isset($path) ? $path : ''; ?>quizzes/">Quiz Center</a> <!-- Quiz Center - Interactive learning assessments -->
        <a href="<?php echo isset($path) ? $path : ''; ?>command-lookup/">Command Lookup</a> <!-- Command Lookup - Reference tool for UNIX commands -->
        <a href="<?php echo isset($path) ? $path : ''; ?>chmod-simulator/">Fun Zone</a> <!-- Fun Zone - Interactive tools and simulators -->
    </div>
</header>