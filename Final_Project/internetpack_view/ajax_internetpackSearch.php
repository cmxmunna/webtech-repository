<?php
require_once '../model/db_connect.php';

function InternetpackSearch($ajax_query)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `internetpack` where usertype LIKE '%$ajax_query%'";
    
        try {
            $stmt = $conn->query($selectQuery);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $rows;
    }
    function fetchInternetpackSearch($ajax_query)
    {
        return InternetpackSearch($ajax_query);
    }
    $ipacks = fetchInternetpackSearch($_GET['ajax_query']);
?>

<table border="1" class="usr-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Speed</th>
            <th>Price</th>
            <th>User Type</th>
            <th>Connection Type</th>
            <th>Using Time</th>
            <th>Support</th>
            <th>Included</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ipacks as $i => $ipack): ?>
        <tr>
            <td><?php echo $ipack['name'] ?></td>
            <td><?php echo $ipack['speed'] ?></td>
            <td><?php echo $ipack['price']." TK" ?></td>
            <td><?php echo $ipack['usertype'] ?></td>
            <td><?php echo $ipack['conntype'] ?></td>
            <td><?php echo $ipack['time'] ?></td>
            <td><?php echo $ipack['support'] ?></td>
            <td><?php echo $ipack['included'] ?></td>
            <td><img width="70px" src="../resources/img/ipack_img/<?php echo $ipack['image'] ?>"
                    alt="<?php echo $ipack['name'] ?>"></td>
            <td>
                <a href="../view/create_payment.php?pack_id=<?php echo $ipack['pack_id'] ?>" class="green"><span
                        class="btn-action">Subscribe</span></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>