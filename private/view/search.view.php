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

    // To reset the state of the toggle button and sidebar
    // when the user clicks outside of them,
    // we can add an event listener to the document
    // that will listen for clicks on all elements.
    // document.onclick = function (e) {
    //     if (e.target !== togglebtn && e.target !== sidebar) {
    //         togglebtn.classList.remove('active');
    //         sidebar.classList.remove('active');
    //     }
    // };




</script>
<?php

$this->View("includes/footer");

?>