<?php include 'layout/header.php'; ?>
<body onload="pageLoad()">
</body>



<script>
function pageLoad() {
  let ask = "Already have an account?";
  if (confirm(ask) == true) {
    window.location.href = "survey.php";
  } else {
    window.location.href = "register.php";
  }
}
</script>
<?php include 'layout/footer.php'; ?>