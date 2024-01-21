
<div id="myModal" class="modal">
    <div class="modal-content">
                <!-- Your form or other modal content goes here -->
                <span class="close" onclick="closeModal()">&times;</span>
                    <!-- Your form or other modal content goes here -->
                    <form id="newPageForm" method="post" action="process.php">
                        <div id="inputContainere">
                            <span>Olması istenen Başlıklar</span>
                            <button type="button" onclick="addInput()"> + </button>
                        </div>
                        
                        <button type="submit" id="btn">Kaydet</button>
                    </form>
            </div>
        </div>
<?php include 'assets/script.php' ?>  
