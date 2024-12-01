<h3>Operating System</h3>

<?php
class OperatingSystem {
    public function getDiskSpace() {
        $disk_path = PHP_OS_FAMILY === 'Windows' ? 'C:\\' : '/';
        $total_space = disk_total_space($disk_path);
        $free_space = disk_free_space($disk_path);
        $used_space = $total_space - $free_space;

        $total_gb = round($total_space / (1024 * 1024 * 1024), 2);
        $free_gb = round($free_space / (1024 * 1024 * 1024), 2);
        $used_gb = round($used_space / (1024 * 1024 * 1024), 2);

        return [
            'total' => $total_gb, 'GB',
            'free' => $free_gb, 'GB',
            'used' => $used_gb, 'GB'
        ];
       
    }
    
}

$os = new OperatingSystem();
$disk_info = $os->getDiskSpace();

echo "Total Disk Space: ".$disk_info['total']."GB";
echo "<br>";
echo "Free Disk Space: ".$disk_info['free']."GB";
echo "<br>";
echo "Used Disk Space: ".$disk_info['used']."GB";




