<?php
session_start();
include('../include/header.php');

if (isset($_SESSION['id_user'])) {
    $user_id = $_SESSION['id_user'];
    $username = $_SESSION['username_user'];
    $telefono = $_SESSION['telefono_user'];
    $email = $_SESSION['email_user'];
    $password = $_SESSION['password_user'];
} else {
    header("Location: index.php");
    exit();
}
?>

<div class="d-flex flex-column justify-content-center align-items-center"
    style="min-height: 100vh; margin-top: -120px;">
    <img src="../images/miguel.jpeg" class="rounded-circle mb-4" alt="..."
        style="width: 150px; height: 150px; object-fit: cover;">

    <div class="font-monospace" style="min-width: 300px;">
        <div class="d-flex justify-content-between">
            <span>Username:</span>
            <span><?php echo htmlspecialchars($username); ?></span>
        </div>
        <div class="d-flex justify-content-between">
            <span>Telefono:</span>
            <span><?php echo htmlspecialchars($telefono); ?></span>
        </div>
        <div class="d-flex justify-content-between">
            <span>Email:</span>
            <span><?php echo htmlspecialchars($email); ?></span>
        </div>
        <div class="d-flex justify-content-between">
            <span>Password:</span>
            <span><?php echo htmlspecialchars($password); ?></span>
        </div>
    </div>
</div>

<?php
include('../include/footer.php');
?>