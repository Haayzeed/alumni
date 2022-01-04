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
        <div class="content full-registration">
            <form action="final.php">
            <h2>New Registration</h2>
                <div class="form-container">
                    <div>
                        <label for="">Matric Number</label>
                        <input type="text" placeholder="">
                    </div>
                    <div>
                        <label for="">First Name</label>
                        <input type="text" placeholder="">
                    </div>
                    <div>
                        <label for="">Last Name</label>
                        <input type="text" placeholder="">
                    </div>
                    <div>
                        <label for="">Email Address</label>
                        <input type="text" placeholder="">
                    </div>
                    <div>
                        <label for="">Home Address</label>
                        <input type="text" placeholder="">
                    </div>
                    <div>
                        <label for="">Graduation Year</label>
                        <input type="text" placeholder="">
                    </div>
                    <div>
                        <label for="">Branch</label>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <button>Submit</button>
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