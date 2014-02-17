<div class="modules"> 
<ul>
    <?php
        $the_loai_bai_viets = DB::table('the_loai_bai_viets')->get();

        foreach ($the_loai_bai_viets as $the_loai_bai_viets)
        {
            echo '<ul>';
            echo $the_loai_bai_viets->ten_the_loai_bai_viet;
            echo '</ul>';
        }  
    ?>    
</ul>  
</div>