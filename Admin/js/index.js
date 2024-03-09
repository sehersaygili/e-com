//yeni kullanıcı ekleme sayfasına yönlendirme
function newUser() {
    $newPageURL = 'new-user.php';
    window.location.href =$newPageURL;
}
$('.star').on('change', function() {
    let stars = $(this).val();
        console.log(stars);
  });