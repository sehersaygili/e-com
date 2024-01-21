<?php
// script.php
$totalPages = ceil($total / $usersPerPage);
$currentPage = $currentPage ?? 1;
?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const totalPages = <?= $totalPages ?>;
    const currentPage = <?= $currentPage ?>;

    function updatePage(page) {
        window.location.href = `?page=${page}`;
    }

    document.querySelector('.pagination').addEventListener('click', function (event) {
        if (event.target.tagName === 'BUTTON') {
            const clickedPage = parseInt(event.target.dataset.page);
            if (!isNaN(clickedPage) && clickedPage !== currentPage) {
                updatePage(clickedPage);
            }
        }
    });
});
</script>
<script src="./index.js"></script>
