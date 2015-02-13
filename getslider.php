 <?
    function sliderImages($town, $res, $rootPath, $rootUri){
        if( $town == "" ){
            $town = "san_diego";
        }
        $dir .= $rootPath."/images/show/".$town."/".$res;
        $dir_our .= $rootPath."/images/show/normal/".$res;

        if ( $handle_our = opendir($dir_our) ) {
            $i = 0;
            while (false !== ($entry_our = readdir($handle_our))) {

                if ($entry_our != "." && $entry_our != "..") {
                    $i++;
                    if( $i == 1){ $cur = "active"; } else { $cur = ""; }
                    $out_our[$i] .= "<div class='item ".$cur."'><img src='".$rootUri."/images/show/normal/".$res."/".$entry_our."' alt=''></div>";
                }
            }
            closedir($handle_our);
        }

        if ( $handle = opendir($dir) ) {
            $i = 0;
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    if($i == 0) { $cur = "active"; } else { $cur = ""; } $i++;
                    $out_area[$i] .= "<div class='item'><img src='".$rootUri."/images/show/".$town."/".$res."/".$entry."' alt=''></div>";
                }
            }
            closedir($handle);
        }

        $summary = count($out_our)+count($out_area);

        for($i = 0; $i <= 2; $i++){
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


