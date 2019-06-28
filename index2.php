<?php
include 'DBController2.php';
$db_handle = new DBController2();
$kategoriResult = $db_handle->runQuery("SELECT DISTINCT kategori FROM file ORDER BY kategori ASC");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Multiselect Dropdown Filter</title>
</head>
<body>
    <h2>Multiselect Dropdown Filter</h2>
    <form method="POST" name="search" action="index2.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="kategori[]" multiple="multiple">
                    <option value="0" selected="selected">Select Kategori</option>
                        <?php
                        if (! empty($kategoriResult)) {
                            foreach ($kategoriResult as $key => $value) {
                                echo '<option value="' . $kategoriResult[$key]['kategori'] . '">' . $kategoriResult[$key]['kategori'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button file_id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['kategori'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
                        <th><strong>Name</strong></th>
                        <th><strong>Gender</strong></th>
                      
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from file";
                    $i = 0;
                    $selectedOptionCount = count($_POST['kategori']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['kategori'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE kategori in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['kategori']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['name']; ?> </div></td>
                           <td><div class="col" id="user_data_2"><?php echo $result[$key]['file']; ?> </div></td>
                            <td><a href="download.php?file=<?php echo $result[$key]['file'];?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>
                      
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>