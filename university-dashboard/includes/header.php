<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<script src="https://cdn.tailwindcss.com"></script>

<header class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        
        <div class="flex items-center space-x-2">
            <span class="text-2xl font-bold text-blue-800">UniVerse</span>
            <span class="text-sm text-slate-500">University Portal</span>
        </div>

        <nav class="flex items-center space-x-6 text-slate-700">
            <a href="index.php" class="hover:text-blue-700">Home</a>

            <?php if(isset($_SESSION['user'])): ?>
                <a href="dashboard.php" class="hover:text-blue-700">Dashboard</a>
                <a href="auth/logout.php" class="text-red-600 hover:text-red-700">Logout</a>
            <?php else: ?>
                <a href="auth/login.php" class="hover:text-blue-700">Login</a>
            <?php endif; ?>
        </nav>

    </div>
</header>
