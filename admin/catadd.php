<?php include_once 'inc/header.php';?>
<?php include_once 'inc/sidebar.php';?>
<?php include_once '../classes/category.php' ?>
<?php
    $cat = new category();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method
        $catName = $_POST ['catName'];
        $insertCat = $cat->insert_category($catName);
}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Thêm danh mục</h2>
               <div class="block copyblock">
                <?php 
                    if(isset($insertCat)){
                        echo $insertCat;
                    }
                ?>
                 <form action="catadd.php" method='post'>
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="catName"placeholder="Làm ơn thêm danh mục sản phẩm..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include_once 'inc/footer.php';?>