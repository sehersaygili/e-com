
<?php
$nameErr = $surnameErr = $phoneErr = $emailErr = $typeErr = $surveyErr = '';
$minLength = 2;
$maxLength = 30;
$nameLength = strlen($_POST['name']);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['name'])) {
        $nameErr = "Kullanıcı Adı Boş Geçilemez!";
    }elseif (!preg_match("/^[a-zA-ZğüşıöçĞÜŞİÖÇ\s]+$/", $_POST['name'])) {
        $nameErr = "Geçersiz karakter içeriyor!";
    }else if ($nameLength < $minLength || $nameLength > $maxLength) {
        $nameErr = "Minimum 2 Maksimum 30 Karakter Giriniz!";
    }

    if(empty(($_POST['surname']))) {
        $surnameErr = "Kullanıcı Soyadı Boş Geçilemez!";
    }elseif (!preg_match("/^[a-zA-ZğüşıöçĞÜŞİÖÇ\s]+$/", $_POST['surname'])) {
        $surnameErr = "Geçersiz karakter içeriyor!";
    }else if ($nameLength < $minLength || $nameLength > $maxLength) {
        $surnameErr = "Minimum 2 Maksimum 30 Karakter Giriniz!";
    }

    if(empty(($_POST['phone']))) {
        $phoneErr = "Kullanıcı Telefon Boş Geçilemez!";
    } elseif (!isValidPhoneNumber($_POST['phone'])) {
        $phoneErr = "Geçerli bir telefon numarası formatına uygun olmalıdır (örneğin, +90555XXXXXXX)";
    }

    if(empty(($_POST['email']))) {
        $emailErr = "Kullanıcı Email Boş Geçilemez!";
    }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Geçerli bir e-posta formatında olmalıdır!";
    } else {
        $stmt = $con->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $emailErr = "Bu E-posta Adresi Zaten Bulunmakta!";
        }
    }
    if (empty($_GET['type'])) {
        $typeErr = "Kullanıcı Tipi Seçmeyi Unuttunuz!";
    }
    if (empty($_POST['survey'])) {
        $surveyErr = "Lütfen Puanlayınız!";
    }
}

function isValidPhoneNumber($phone) {
    return preg_match("/^\+90\d{10}$/", $phone);
}

?>
