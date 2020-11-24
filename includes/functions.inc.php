<?php

    // php variable starts with $
    // array is inside
    $navItems = [
        // menu item 1
        [
            'title' => 'Home',
            'isSubpage' => false
        ],

        // menu item 2
        [
            'title' => 'Generic',
            'isSubpage' => true
        ],

        // menu item 3
        [
            'title' => 'Elements',
            'isSubpage' => true
        ],

    ];

    function renderNavigation($navItems){
        $html = '';
        foreach($navItems as $item){
            $html.='<a href="index.php?menu='.strtolower($item['title']).'">'.$item['title'].'</a>';
        }

        return $html;
    }

    function isSubpage($menu, $navItems){
        if($menu){
            // if menu == home, we get array item with title == Home
            $filtered = array_filter($navItems, function($value) use ($menu) {
                return strtolower($value['title']) == $menu;
            });

            $filtered = array_pop($filtered);
            if($filtered['isSubpage']){
                return 'class="subpage"';
            }
        }
    }

?>