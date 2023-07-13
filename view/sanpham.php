<div class="row mr ">
    <div class="boxtrai mr ">
    <div class="row mb">
        <div class="boxtitle">Sản Phẩm <strong><?=$tendm?></strong></div>
        <div class=" row boxcontent">
        <?php
        $i=0;
        foreach($dssp as $sp){
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh=$img_path.$img;
                if(($i==10)||($i==12)||($i==15)||($i==20)){
                    $mr="mr";
                }else{
                    $mr="";
                }
                echo '<div class="boxsp '.$mr.'">
                <div class="row img"><img src="'.$hinh.'" alt=""></div>
                <p>'.$price.'</p>
                <a href="">'.$name.'</a>
            </div>';
            $i+=1;
            }
        ?>

    </div>
</div>
    </div>
    <div class="boxphai ">
    <?php
        include_once "boxright.php";
        ?>
    </div>
</div>