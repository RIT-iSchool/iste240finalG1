    <!-- Footer -->
    <footer>
        <div class="container" style="padding-top: 4rem; padding-bottom: 4rem;">
            <div class="footer-grid">
                <div>
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Start Here</a></li>
                        <li><a href="#">Command Lookup</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Learning Paths</h4>
                    <ul>
                        <li><a href="#">Beginner Track</a></li>
                        <li><a href="#">Intermediate Track</a></li>
                        <li><a href="#">Advanced Topics</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">All Tutorials</a></li>
                        <li><a href="#">Quiz Center</a></li>
                        <li><a href="#">Interactive Tools</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Feedback</h4>
                    <ul>
                        <li><a href="#">Submit Suggestions</a></li>
                        <li><a href="#">Learning Reflection</a></li>
                    </ul>
                    <button id="dark-mode-toggle">
                        <svg id="moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                        <svg id="sun-icon" class="hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <span>Toggle Dark Mode</span>
                    </button>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 UNIX for Web Development. Created for ISTE 240.</p>
            </div>
        </div>
    </footer>

    <script src="<?php echo isset($path) ? $path : ''; ?>.assets/js/script.js"></script>
</body>
</html>
