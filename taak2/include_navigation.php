<?php 
    $pagina = basename($_SERVER["SCRIPT_NAME"]);
?>
<nav>
    <ul>
        <li class="<?php echo ($pagina == 'taak2.php')? 'active':""; ?>"><a href="taak2.php">Home</a>
        </li>
       <li class="<?php echo ($pagina == 'blog.php')? 'active':""; ?>"><a href="blog.php">Contact</a>
        </li>
        <li class="<?php echo ($pagina == 'contact.php')? 'active':""; ?>"><a href="contact.php">Contact</a>
        </li>
    </ul>
</nav>