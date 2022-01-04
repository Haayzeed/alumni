<?php
include 'includes/sidebar.php';
?>
<!-- content -->
<div class="main-content">
    <header>
        <div class="menu-toggle">
            <label for="sidebar-toggle">
                <span class="fas fa-bars"></span>
            </label>
            <h3>alumni registration</h3>
        </div>
        <div class="header-icons">
            <a>Register</a>
        </div>
    </header>
    <main>
        <div class="content register">
            <form action="full-registration.php">
                <h2>Lets get started</h2>
                <label for="">Matric Number</label>
                <input type="text" placeholder="H/CS/16/0101">
                <button>Get Started</button>
            </form>
        </div>
    </main>
</div>
<label for="sidebar-toggle" class="body-label"></label>

<?php
include 'includes/footer.php';
?>
</body>

</html>