<?php
// переменная для сохранения результата
$data='';
// переберём массив $_POST
foreach ($_POST as $key => $value) 
{
    if(filter_var($value, FILTER_VALIDATE_URL))
    {
        $filename = uniqid();
        $image = file_get_contents($value);
        file_put_contents(dirname(__FILE__)."/img/${filename}.jpeg", $image);
        
    }
        else
    {
        echo "NOT Valid URL ${key} ${value}";
    }
mix = "ffmpeg -start_number 1 -i 'E:/OpenServer/domains/test/img/%d.jpeg' -c:v libx264 E:/OpenServer/domains/test/video/videoout.mp4";
    
    exec($mix." 2>&1", $out, $ret);
if ($ret){
    echo "There was a problem!\n";
    print_r($out);
}else{
    echo "Everything went better than expected!\n";
}
}

/*$audio_file = "/path/to/mp3-file";
$img_file = "/img";
$video_file = "/video";*/
function mix_video() {
    $img_file = "E:/OpenServer/domains/test/img/"; //папка с картинками
    $video_file = "E:/OpenServer/domains/test/video/videoout.mp4";//output
    
    $
    
    
}



?>