
<?php
$nameErr = $surnameErr = $phoneErr = $emailErr = $typeErr = $surveyErr = '';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['name'])) {
        $nameErr = "Kullanıcı Adı Boş Geçilemez!";
    }
    if(empty(($_POST['surname']))) {
        $surnameErr = "Kullanıcı Soyadı Boş Geçilemez!";
    }
    if(empty(($_POST['phone']))) {
        $phoneErr = "Kullanıcı Telefon Boş Geçilemez!";
    }
    if(empty(($_POST['email']))) {
        $emailErr = "Kullanıcı Email Boş Geçilemez!";
    }
    if(empty(($_POST['email']))) {
        $emailErr = "Kullanıcı Email Boş Geçilemez!";
    }
    if (empty($_GET['type'])) {
        $typeErr = "Kullanıcı Tipi Seçmeyi Unuttunuz!";
    }
    if (empty($_POST['survey'])) {
        $surveyErr = "Lütfen Puanlayınız!";
    }
}

?>
