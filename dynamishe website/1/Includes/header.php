<?php global $pages?>
<header>
    <div class="logo">
        <img src="../Images/Logo.png" alt="Logo">
    </div>
    <nav class="navbar">
        <ul>
            <?php foreach ($pages as $page): ?>
                <li><a href="/onderwerpen/<?php echo urlencode($page["id"])?>"><?php echo htmlspecialchars($page["name"]) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>