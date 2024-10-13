<?php

$year = new DateTime("Y");

?>
</div>

<footer>
    <p class="text-center mt-3">
        <?= $author ?>
        <img style="width: 15px"
             src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Copyleft.svg/1024px-Copyleft.svg.png"
             alt="Copyleft">
        <?= $year->format('Y') ?>
    </p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
