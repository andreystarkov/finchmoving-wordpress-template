 <?  function sliderImages($town, $res, $rootPath, $rootUri){
        $dir .= $rootPath."/images/show/".$town."/".$res;
        $dir_our .= $rootPath."/images/show/normal/".$res;

        if ( $handle_our = opendir($dir_our) ) {
            $i = 0;
            while (false !== ($entry_our = readdir($handle_our))) {

                if ($entry_our != "." && $entry_our != "..") {
                    $i++;
                    if( $i == 1){ $cur = "class='current' "; } else { $cur = ""; }
                    $out_our[$i] .= "<li ".$cur."><img src='".$rootUri."/images/show/normal/".$res."/".$entry_our."' alt=''></li>";
                }
            }
            closedir($handle_our);
        }

        if ( $handle = opendir($dir) ) {
            $i = 0;
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    if($i == 0) { $cur = "current"; } else { $cur = ""; } $i++;
                    $out_area[$i] .= "<li><img src='".$rootUri."/images/show/".$town."/".$res."/".$entry."' alt=''></li>";
                }
            }
            closedir($handle);
        }

        $summary = count($out_our)+count($out_area);

        for($i = 0; $i <= $summary; $i++){
            if(count($out_area) >= $i){
                $return .= $out_area[$i];
            }
            if(count($out_our) >= $i){
                $return .= $out_our[$i];
            }
        }
        return $return;
    }

$town = $_POST['town'];
$res = $_POST['res'];
$rootPath = $_POST['rootPath'];
$rootUri = $_POST['rootUri'];

echo sliderImages($town, $res, $rootPath, $rootUri);
?>


