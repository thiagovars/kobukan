<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $("#teste").keyup(function (event) {
    $("#saida").html(this.value);
  });
});
</script>


<form action="<?php echo $PHP_SELF; ?>" method="post">
  <table>
    <tr>
      <td>Nome:</td>
    </tr>
    <tr>
      <td><input type="text" name="nome" /></td>
    </tr>
    <tr>
      <td><input type="button" value="save" /></td>
    </tr>
  </table>
</form>