<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="#">
                CODEMVC
            </a>
            <?php
//                $varialbes=array(
//                    'menu_name'=>"header_nav",  //machine name of the menu
//                    'attributes'=>array('class'=>'nav'),
//                    'options'=>array(
//                        'tag'=>"ul", //ul or ol
//                        'submenu'=>array(
//                            '0'=>array(
//                                'li'=>array('class'=>'dropdown'),
//                                'a'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
//                                'ul'=>array('class'=>'dropdown-menu')
//                            )
//                        )
//                    )
//                );
//                print menu_links($varialbes);
            ?>
             <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Modules <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Users</li>
                        <li><a href="<?php echo base_url(); ?>user/admin/role/">Roles</a></li>
                        <li><a href="<?php echo base_url(); ?>user/admin/user/">Users</a></li>                        
                        <li class="divider"></li>
                        <li class="nav-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
                <?php
//                     $varialbes=array(
//                        'menu_name'=>"user",  //machine name of the menu
//                        'attributes'=>array('class'=>'nav pull-right'),
//                        'options'=>array(
//                            'tag'=>"ul", //ul or ol
//                            'submenu'=>array(
//                                '0'=>array(
//                                    'li'=>array('class'=>'dropdown'),
//                                    'a'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
//                                    'ul'=>array('class'=>'dropdown-menu')
//                                )
//                            )
//                        )
//                    );
//                    print menu_links($varialbes);
                ?>
            
        </div>
    </div>
</div>