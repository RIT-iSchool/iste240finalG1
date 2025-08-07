    <!-- 
    Footer Component
    
    This footer provides navigation links, learning paths, resources, and site functionality.
    It's designed to be included in all pages via PHP include.
    
    Features:
    - Responsive grid layout with multiple navigation sections
    - Dynamic path handling using PHP $path variable
    - Dark mode toggle functionality
    - Copyright information
    - JavaScript file inclusion
-->
<footer>
    <!-- Main footer container with padding for visual spacing -->
    <div class="container" style="padding-top: 4rem; padding-bottom: 4rem;">
        <!-- Grid layout for footer sections -->
        <div class="footer-grid">
            <!-- Quick Links Section - Primary site navigation -->
            <div>
                <h4>Quick Links</h4>
                <ul>
                    <!-- Dynamic path handling: checks if $path variable exists for proper relative linking -->
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>index.php">Home</a></li>
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>why-unix/">About</a></li>
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>about/">Start Here</a></li>
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>command-lookup/">Command Lookup</a></li>
                </ul>
            </div>
            <!-- Learning Paths Section - Educational progression tracks -->
            <div>
                <h4>Learning Paths</h4>
                <ul>
                    <!-- Structured learning progression from beginner to advanced -->
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>about/">Beginner Track</a></li>
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>core-tools/">Intermediate Track</a></li>
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>chmod-simulator/">Advanced Topics</a></li>
                </ul>
            </div>
            <!-- Resources Section - Additional learning materials and tools -->
            <div>
                <h4>Resources</h4>
                <ul>
                    <!-- Comprehensive educational content and interactive features -->
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>tutorials/">All Tutorials</a></li>
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>quizzes/">Quiz Center</a></li>
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>chmod-simulator/">Interactive Tools</a></li>
                </ul>
            </div>
            <!-- Feedback Section - User engagement and dark mode toggle -->
            <div>
                <h4>Feedback</h4>
                <ul>
                    <!-- User feedback and reflection tools -->
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>feedback/">Submit Suggestions</a></li>
                    <li><a href="<?php echo isset($path) ? $path : ''; ?>feedback/#reflection">Learning Reflection</a></li>
                </ul>
                
                <!-- Dark Mode Toggle Button -->
                <!-- Interactive button to switch between light and dark themes -->
                <button id="dark-mode-toggle">
                    <!-- Moon icon for dark mode (default visible) -->
                    <svg id="moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <!-- Sun icon for light mode (hidden by default) -->
                    <svg id="sun-icon" class="hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span>Toggle Dark Mode</span>
                </button>
            </div>
        </div>
        
        <!-- Footer Bottom Section - Copyright and attribution -->
        <div class="footer-bottom">
            <p>&copy; 2025 UNIX for Web Development. Created for ISTE 240.</p>
        </div>
    </div>
</footer>

<!-- JavaScript Include -->
<!-- Include main script file with dynamic path handling for proper relative linking -->
<script src="<?php echo isset($path) ? $path : ''; ?>_assets/js/script.js"></script>

<!-- HTML Document End -->
<!-- This footer component closes the body and html tags, completing the page structure -->
</body>
</html>
