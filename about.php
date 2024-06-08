<!--/about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1> ABOUT US</h1>
    <?php
    $team = [
        ["name" => "DAVE", "role" => "CEO"],
        ["name" => "DANIEL", "role" => "CTO"],
        ["name" => "Emily Jones", "role" => "CFO"],
    ];
    ?>
<h2>Our Team</h2>
<img src="our.jpg" alt="Description of Image" width="800" height="300">

<ul>
<?php foreach ($team as $member): ?>
<li><?= $member['name'] ?> - <?= $member['role'] ?></li>
<?php endforeach; ?>
</ul>
</main>
<?php include 'includes/footer.php'; ?>   






    ]