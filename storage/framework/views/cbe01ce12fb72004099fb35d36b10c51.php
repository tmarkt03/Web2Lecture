
<div>
  <?php if(Auth::check()): ?>
    <a href="/dashboard">Dashboard</a>
  <?php endif; ?>
  <a href="/introduction">Introduction</a>
  <a href="/chart">chart</a>
  <a href="/contact">contact</a>
  <?php if(Auth::check()): ?>
    <a href="/user">User</a>
    <a href="/articles">Articles</a>
    <?php if(Auth::User()->role==1): ?>
      <a href='/admin'>Admin</a>
    <?php endif; ?>
    <form method="post" action="/logout" style="display:inline;">
      <?php echo csrf_field(); ?>
      <input type="submit" value="Logout">
    </form>
  <?php endif; ?>





</div>
<?php /**PATH /home/iwakura/Downloads/Laravel-with-Auth/resources/views/header.blade.php ENDPATH**/ ?>