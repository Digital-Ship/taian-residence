<?php
$li_list = null;

if($pageName4){$pageName_array[] = array($pageName4 , $pageName_url4);}
if($pageName3){$pageName_array[] = array($pageName3 , $pageName_url3);}
if($pageName2){$pageName_array[] = array($pageName2 , $pageName_url2);}
if($pageName1){$pageName_array[] = array($pageName1 , $pageName_url1);}
if($pageName){$pageName_array[] = array($pageName , $pageName_url);}
foreach($pageName_array as $pageName_array_data){
if($pageName_array_data[0] != ""){
if($pageName_array_data[1] != ""){
$li_data = '<a href="'.$pageName_array_data[1].'" class="p-breadcrumbs__link" itemprop="item">'.$pageName_array_data[0].'</a>'."";
}else{
$li_data = $pageName_array_data[0];
}
$li_data = '<li class="p-breadcrumbs__item">'.$li_data.'</li>'."\n";
}

$li_list .= $li_data;
}

?>


<ol>
    <li><a href="<?php echo $Path; ?>">HOME</a></li>
    <?php echo $li_list;?>
</ol>
