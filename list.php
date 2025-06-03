<?
header('Content-type: application/json');

################################################################################
# Print filenames in the directory
################################################################################
function list_dir($dir_path) {
    debug("list_dir: ". $dir_path);
	/*
    if ($handle = opendir($dir_path)) {
        while (false !== ($file = readdir($handle))) {
            if (is_support($file)) {
                echo "$file\n";
            }
        }
        closedir($handle);
    }
	*/
	// 2018-11-26 Hyunee ����� ���ĵ��� �ʾ� ������.
//	$files = scandir( $dir_path, SCANDIR_SORT_ASCENDING );
	// 2020-11-14 Hyunee SCANDIR_SORT_ASCENDING �� �ν����� ������ ���� -> 0
	$files = scandir( $dir_path, 0 );
    $isContinue = false;
	foreach( $files as $file ) {
        $size = filesize($file);
        if(is_file($file) && strtolower(substr(strrchr($file,'.'),1))=='bnk'){
            if($isContinue) echo ',';
            else $isContinue=true;
            // {"":"","";0} ������ �ƴϸ� JSON.parse ������
            // Uncaught SyntaxError: Expected property name or '}' in JSON at ...
            echo "{\"filename\":\"$file\",\"size\":$size}";
        }
	}

//    exit;
}


################################################################################
# Print debugging message
################################################################################
function debug($str) {
    global $is_debug;
    if ($is_debug) { 
        echo "<i>".$str."</i><br>";
    }
}


echo '[';
list_dir(".");
echo ']';
?>