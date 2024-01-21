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

    // Önceki sayfa
    document.getElementById('prevPage').addEventListener('click', function () {
        if (currentPage > 1) {
            updatePage(currentPage - 1);
        }
    });

    // Sonraki sayfa
    document.getElementById('nextPage').addEventListener('click', function () {
        if (currentPage < totalPages) {
            updatePage(currentPage + 1);
        }
    });
});
</script>
<script src="./index.js"></script>
