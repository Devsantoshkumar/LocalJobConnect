<!-- FOOTER LINK PAGE -->

<!-- used by ajax request url in ajax.js file -->
<input type="hidden" id="baseUrl" value="<?=BASE; ?>">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
<script src="<?= ASSETS ?>js/owl.carousel.min.js"></script>
<script src="<?= ASSETS ?>js/script.js"></script>
<script src="<?= ASSETS ?>js/ajax.js"></script>


<?php if (isset($_SESSION['msg']) && $_SESSION['msg'] != "") { ?>

    <script>

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: '<?= $_SESSION['status']; ?>',
            title: '<?= $_SESSION['msg']; ?>'
        })

    </script>

    <?php unset($_SESSION['msg']);
    unset($_SESSION['status']);
} ?>

</body>

</html>