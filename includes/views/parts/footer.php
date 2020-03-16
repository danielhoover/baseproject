
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

<?php if($this->current == "index"): ?>
    <script type="text/javascript" src="js/core.js"></script>
<?php elseif($this->current == "register"): ?>
    <script type="text/javascript" src="js/register.js"></script>
<?php elseif($this->current == "login"): ?>
    <script type="text/javascript" src="js/toastr.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
<?php endif; ?>
</body>
</html>