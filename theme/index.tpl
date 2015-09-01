<ul>
<?php foreach($nav as $navItem){ ?>
    <li><?php echo $navItem['title']; ?>
    
    <?php if (array_key_exists('submenu', $navItem) && is_array($navItem['submenu'])){  ?>
    <ul>
    <?php foreach ($navItem['submenu'] as $subItem){ ?>
      <li class="">
          <a href="<?php echo $subItem['url']; ?>" ><?php echo $subItem['title']; ?></a>
      </li>
    <?php } ?>
    </ul>
    <?php } ?>
    </li>

<?php } ?>
</ul>
