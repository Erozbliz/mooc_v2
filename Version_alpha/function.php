<?php

function readstep($filename)
{
if(!file_exists($filename))
throw new Exception ("not found");

    $tab=file($filename);
    $content="";
    $l=0;
    $total=count($tab);

    while($l<$total)
    {
        if(strpos($tab[$l],"===========")!==false)
            break;
        $l++;
    }
    $l++;
    while($l<$total)
    {
        if(strpos($tab[$l],"===========")!==false)
            break;
        $content.=$tab[$l];
        $l++;
    }
//$filename=str_replace('.html','.php',$filename);
//file_put_contents("$filename",$content);
    return $content;

}

function readsteps($max)
{
    $tab=array();
    
    for($i=1;$i<=$max;$i++)
    try{
        $tab[]=readstep("step$i.html");
}
catch(Exception $e)
{}

    return $tab;
}
