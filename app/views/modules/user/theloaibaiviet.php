 
<?php
        $the_loai = new The_loai_bai_viet();
        $the_loai_bai_viets = $the_loai->the_loai_bai_viet();
        echo "<div class='widget'>";
        echo '<h4 class="title">Chuyên Mục</h4>';
        echo "<ul class='unstyled categories'>";
        foreach ($the_loai_bai_viets as $the_loai_bai_viets)
        {
 
            echo '<li><i class="icon-double-angle-right"></i>'.link_to_route('tin_tuc.theloai', $the_loai_bai_viets->ten_the_loai_bai_viet, array($the_loai_bai_viets->id)).'</li>' ;
 
        }  
        echo "</ul>";
        echo "</div>";
 ?>