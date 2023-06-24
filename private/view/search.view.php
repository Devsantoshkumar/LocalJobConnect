<!-- Search View php -->

<?php

$this->View("includes/header");
$this->View("includes/searchnav");

?>
<script>


    const togglebtn = document.querySelector('#toggle-btn');
    const sidebar = document.querySelector('#sidebar');

    togglebtn.onclick = function () {
        if (!togglebtn.classList.contains('active')) {
            togglebtn.classList.toggle('active');
            sidebar.classList.toggle('active');
        } else {
            togglebtn.classList.remove('active');
            sidebar.classList.remove('active');
        }
    };

    window.onclick = function (e) {
        if (e.target === togglebtn && e.target === sidebar) {
            // togglebtn.classList.remove('active');
            // sidebar.classList.remove('active');
            console.log("hello");
        }
    };




</script>
<?php

$this->View("includes/footer");

?>