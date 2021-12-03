<?php
   $title = 'Logo Privacy e termini';
   $items_menu = [
       [
        'link' => 'Introduzione',
        'active' => false,
        ],
        [
        'link' => 'Norme sulla privacy',
        'active' => false,
        ],
        [
        'link' => 'Termini di servizio',
        'active' => false,
        ],
        [
        'link' => 'Tecnologie',
        'active' => false,
        ],
        [
        'link' => 'Domande frequenti',
        'active' => true,
        ],
   ];
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domande frequenti</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-color: #FFFFFF;
    }
    #site_header{
        height: 80px;
        width: 100vw;
        border-bottom: 2px solid #CBCBCB;
        display: flex;
    }
    .menu{
        height: 100%;
        margin-left: 10px;
    }
    .logo{
        height: 70%;
        width: 100%;
        display: flex;
        align-items: center;
    }
    .menu_list{
        list-style: none;
        display: flex;
        height: 100%;
    }
    .menu_list li{
        margin: 0px 20px 0px 0px;
    }
    
    .menu_list li a{
        text-decoration: none;
        color: grey;
        padding-bottom: 4px;
    }
    a.active{
        color: blue;
        border-bottom: 4px solid blue;
    }
    #site_footer{
        height: 40px;
        width: 100vw;
        background-color: #F5F5F5;
    }



    /* common rules */
    .w-50{
        width: calc(100% / 2);
    }
    </style>
</head>
<body>
    <header id="site_header">
        <div class="menu w-50">
            <div class="logo">
                <h1><?= $title ?></h1>
                
            </div>
            <ul class="menu_list">
                <?php foreach ($items_menu as $item_menu) : 
                    $active = $item_menu['active']; ?> 
                    <li><a href="#" class="<?= $active === true ? 'active': 'link';?>">
                        <?= $item_menu['link']; ?>
                    </a></li>
                <?php endforeach;?>
                
            </ul>
        </div>
        <div class="menu w-50"></div>

    </header>
    <!-- /#site_header -->
    <main id="site_main">
        main
    </main>
    <!-- /#site_main -->
    <footer id="site_footer">
        footer
    </footer>
    <!-- /#site_footer -->
</body>
</html>