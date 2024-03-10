<?php
include_once 'assets/head.php';
?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    try{
        $stmt = $con->prepare("UPDATE users SET status = 1 WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $success = true;

    } catch(\Exception $e) {
        echo $e->getMessage();
        $success = false;
    }
    if ($success) { ?>
        <script>
            Swal.fire({
                title: "Kişi Artık Aktif !",
                text: "Kişi Aktif Hale Getiriliyor !",
                icon: "success"
            }).then((result) => {
                if(result.isConfirmed) {
                    window.location.href = "customers.php";
                }
            });
                
        </script>
    <?php 
    } 
}
?>

</body>
</html>
