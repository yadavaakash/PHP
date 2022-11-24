<?php
    require './connection/connection.php';

                        $sql = "SELECT
                            `tbl_subcategory`.`sub_category_id`
                            , `tbl_subcategory`.`sub_category_name`
                            , `tbl_category`.`category_name`
                            , `tbl_subcategory`.`is_active`
                            , `tbl_subcategory`.`insert_date`
                            FROM
                                `tbl_category`
                                INNER JOIN `tbl_subcategory` 
                                    ON (`tbl_category`.`category_id` = `tbl_subcategory`.`category_id`)
                            ORDER BY `tbl_subcategory`.`sub_category_id` ASC;";

                        $query = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                        echo "<table border= '1'>";

                        echo "<tr>";
                            echo "<td>ID</td>";
                            echo "<td>SubCategory</td>";
                            echo "<td>Category</td>";
                            echo "<td>IsActive</td>";
                            echo "<td>Insert Date</td>";

                        echo "</tr>";
                            while($row = mysqli_fetch_array($query)){
                                echo "<tr>";
                                    echo "<td>{$row['sub_category_id']}</td>";
                                    echo "<td>{$row['sub_category_name']}</td>";
                                    echo "<td>{$row['category_name']}</td>";
                                    echo "<td>{$row['is_active']}</td>";
                                    echo "<td>{$row['insert_date']}</td>";
                                    

                                echo "</tr>";
                            }

                        echo "</table>";

?>