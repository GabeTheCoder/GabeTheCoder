<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        <?php if (!is_front_page()): ?>
            <?php echo the_title(), ' - ', bloginfo('name'); ?>
        <?php else: ?>
            <?php bloginfo('name'); ?>
        <?php endif; ?>
    </title>

    <?php wp_head(); ?>
</head>
<body>

    <header id="header">
        <div class="primary-container">
            <nav>
                <a href="/"><h1 class="title">Gabe The Coder</h1></a>
                <button class="toggle-menu" onclick="toggleMenu()"></button>
                <ul>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
                <div class="clear"></div>

                <script>
                    function toggleMenu() {
                        var navTitle = document.getElementById('header');
                        navTitle.classList.toggle('toggled');
                    }
                </script>
            </nav>
        </div>
    </header>