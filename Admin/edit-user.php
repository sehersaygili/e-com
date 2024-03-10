<?php
include_once 'assets/head.php';
include_once 'assets/validation_errors.php';

$user_id = $_GET['id']; // Replace with the actual user ID
$userQuery = $con->prepare("SELECT * FROM users WHERE id = :id");
$userQuery->bindParam(':id', $user_id, PDO::PARAM_INT);
$userQuery->execute();
$userData = $userQuery->fetch(PDO::FETCH_ASSOC);

?>
<div class="container">
    <?php include_once 'assets/sidebar.php';?>

    <?php if (isset($_POST['duzenle'])){
        try {
            $sql = "UPDATE users SET
                name = :name,
                surname = :surname,
                email = :email,
                phone = :phone,
                survey = :survey,
                type = :type,
                updated_at = :updated_at
                WHERE id = :id"; 
            
                $stmt = $con->prepare($sql);
                $stmt->bindParam(':name', $_REQUEST['name'], PDO::PARAM_STR);
                $stmt->bindParam(':surname', $_REQUEST['surname'], PDO::PARAM_STR);
                $stmt->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
                $stmt->bindParam(':phone', $_REQUEST['phone'], PDO::PARAM_STR);
                $stmt->bindParam(':survey', $_REQUEST['survey'], PDO::PARAM_STR);
                $stmt->bindParam(':type', $_REQUEST['type'], PDO::PARAM_STR);
                $stmt->execute();
                
        } catch (\Exception $e) {
        }
        
    }
    ?>
    <form role="form" method="POST" enctype="multipart/form-data" autocomplete="off" action="">
    <?php 
    if (isset($_POST['duzenle'])){
        $userQuery = $con->prepare("SELECT type FROM users WHERE id= :id");
        $userQuery->bindParam(':id', $lastInsertId, PDO::PARAM_INT);
        $userQuery->execute();
        $userData = $userQuery->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
            $typeText = ($userData['type'] == 1) ? 'Admin' : 'Müşteri';

            echo '<div class="alert alert-success mt-3">'.$typeText.' Eklendi!</div>';
            exit();
        } else {
            echo '<div class="alert alert-danger mt-3">Sütun Eklenemedi!</div>';
        }
    }
    ?>
    <br>
        <div class="row">
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Kullanıcı Adı</label>
                <input class="form-control" type="text" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : $userData['name'] ?>" >
                <span class="error"><?php echo $nameErr; ?></span>
            </div>
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Kullanıcı Soyadı</label>
                <input class="form-control" type="text" name="surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : $userData['surname'] ?>" >
                <span class="error"><?php echo $surnameErr; ?></span>
            </div>
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Kullanıcı Email</label>
                <input class="form-control" type="text" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : $userData['email'] ?>" >
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Telefon</label>
                <input class="form-control" type="text" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : $userData['phone'] ?>">
                <span class="error"><?php echo $phoneErr; ?></span>
            </div>
            <div class="col-md-12" style="margin-bottom: 15px;">
                <label>Kullanıcı Tipi</label>
                <select class="form-select" name="type">
                    <option value="empty"></option>
                    <option value="0" <?php echo ($userData['type'] == 0) ? 'selected' : ''; ?>>Müşteri</option>
                    <option value="1" <?php echo ($userData['type'] == 1) ? 'selected' : ''; ?>>Admin</option>
                </select>
                <span class="error"><?php echo $typeErr; ?></span>
            </div>
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Puanınız</label>
                <div class="rating" name="survey">
                <?php
                    $ratings = array(5, 4, 3, 2, 1);

                foreach ($ratings as $rating) {
                    echo '<input id="radio' . $rating . '" type="radio" name="star" value="' . $rating . '" class="star"';
                    if ($rating == $userData['survey']) {
                        echo ' checked';
                    }
                    echo ' />';
                    echo '<label for="radio' . $rating . '">&#9733;</label>';
                }
                ?>
            </div>
            <span class="error"><?php echo $surveyErr; ?></span>
            </div>
            <div class="col-md-3 text-right">
                <button class="btn btn-primary" name="duzenle" type="submit">Düzenle</button>
            </div>
        </div>
    </form>
</div>
<div>
</div>
<script src="./js/index.js"></script>



