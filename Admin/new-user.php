<?php
include_once 'assets/head.php';
include_once 'assets/validation_errors.php';
?>
<div class="container">
    <?php include_once 'assets/sidebar.php';?>

    <?php if (isset($_POST['kaydet'])){
        try {
            $stmt = $con->prepare("INSERT INTO users(
                name, surname, email, phone, survey, status, type, created_at
            ) VALUES(
                :name, :surname, :email, :phone, :survey, :status, :type, :created_at
            )");
            
        $status='1';
        $currentDateTime = date("Y-m-d H:i:s");
        
        $stmt->bindParam(':name', $_REQUEST['name'], PDO::PARAM_STR);
        $stmt->bindParam(':surname', $_REQUEST['surname'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $_REQUEST['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':survey', $_POST['star'], PDO::PARAM_STR);
        $stmt->bindParam(':type', $_REQUEST['type'], PDO::PARAM_STR);
        $stmt->bindParam(':created_at', $currentDateTime, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);

        $stmt->execute();
        } catch (\Exception $e) {
        }
    }
    ?>
    <form role="form" method="POST" enctype="multipart/form-data" autocomplete="off" action="">
    <?php 
    if (isset($_POST['kaydet'])){
        $lastInsertId = $con->lastInsertId();
        $userQuery = $con->prepare("SELECT type FROM users WHERE id= :id");
        $userQuery->bindParam(':id', $lastInsertId, PDO::PARAM_INT);
        $userQuery->execute();
        $userData = $userQuery->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
            $typeText = ($userData['type'] == 1) ? 'Admin' : 'Müşteri';

            echo '<div class="alert alert-success mt-3">'.$typeText.' Eklendi!</div>';
        } else {
            echo '<div class="alert alert-danger mt-3">Sütun Eklenemedi!</div>';
        }
    }
    ?>
    <br>
        <div class="row">
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Kullanıcı Adı</label>
                <input class="form-control" type="text" name="name" >
                <span class="error"><?php echo $nameErr; ?></span>
            </div>
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Kullanıcı Soyadı</label>
                <input class="form-control" type="text" name="surname" >
                <span class="error"><?php echo $surnameErr; ?></span>
            </div>
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Kullanıcı Email</label>
                <input class="form-control" type="text" name="email" >
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Telefon</label>
                <input class="form-control" type="text" name="phone" >
                <span class="error"><?php echo $phoneErr; ?></span>
            </div>
            <div class="col-md-12" style="margin-bottom: 15px;">
                <label>Kullanıcı Tipi</label>
                <select class="form-select" name="type">
                    <option value="empty"></option>
                    <option value="0">Müşteri</option>
                    <option value="1">Admin</option>
                </select>
                <span class="error"><?php echo $typeErr; ?></span>
            </div>
            <div class="col-md-3" style="margin-bottom: 15px;">
                <label>Puanınız</label>
                <div class="rating" name="survey">
                    <input id="radio1" type="radio" name="star" value="5" class="star" />
                    <label for="radio1">&#9733;</label>
                    <input id="radio2" type="radio" name="star" value="4" class="star" />
                    <label for="radio2">&#9733;</label>
                    <input id="radio3" type="radio" name="star" value="3" class="star" />
                    <label for="radio3">&#9733;</label>
                    <input id="radio4" type="radio" name="star" value="2" class="star" />
                    <label for="radio4">&#9733;</label>
                    <input id="radio5" type="radio" name="star" value="1" class="star" />
                    <label for="radio5">&#9733;</label>
                </div>
                <span class="error"><?php echo $surveyErr; ?></span>
            </div>

            
            <div class="col-md-3 text-right">
                <button class="btn btn-primary" name="kaydet" type="submit">Kaydet</button>
            </div>
        </div>
    </form>
</div>
<div>
</div>
<script src="./js/index.js"></script>



