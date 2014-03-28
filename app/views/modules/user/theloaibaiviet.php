<div class="modules navbar-inner"> 
<ul>
    <?php
        $the_loai_bai_viets = DB::table('the_loai_bai_viets')->get();

        foreach ($the_loai_bai_viets as $the_loai_bai_viets)
        {
            echo '<ul class="nav">';
            echo link_to_route('tin_tuc.theloai', $the_loai_bai_viets->ten_the_loai_bai_viet, array($the_loai_bai_viets->id)) ;
            echo '</ul>';
        }  
    ?>    

</ul>  
</div>