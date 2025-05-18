<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

require 'db.php';
$result = $conn->query("SELECT * FROM messages ORDER BY submitted_at DESC");
?>

<h2>Messages</h2>
<a href="logout.php">Logout</a>
<table border="1">
  <tr><th>Name</th><th>Email</th><th>Message</th><th>Submitted At</th></tr>
  <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= htmlspecialchars($row['name']) ?></td>
      <td><?= htmlspecialchars($row['email']) ?></td>
      <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
      <td><?= $row['submitted_at'] ?></td>
    </tr>
  <?php endwhile; ?>
</table>
