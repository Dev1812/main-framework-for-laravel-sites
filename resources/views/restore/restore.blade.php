<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
?>
<div class="content">
<div class="reg-page">
<div class="form">
<div class="form-wrap">
<div class="form-title">Восстановление пароля</div>
<div class="form-body">

<FORM action="/restore" method="POST">



  <div class="form-item__wrap">
  	<div class="form-big__label"><span class="form-big__label_text">Ваш email</span></div>
  	<div class="form-big-input__wrap">
  		<input type="text" name="" class="big_text_field" placeholder="Ваш email">
  	</div>
  </div>



  <div class="form-item__wrap form-item__wrap_button" >
  	<div class="form-big-input__wrap">
  		<input type="submit" name="" class="button" value="Восстановить">
  	</div>
  </div>

<div class="form-bottom">
  
<div class="form-bottom__line"><a href="/login">Вход</a></div>

<div class="form-bottom__line"><a href="/reg">Регистрация</a></div>  
</div>

</FORM> 

</div>
</div>
</div>




</div>


</div>
<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>