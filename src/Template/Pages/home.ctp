<h1>Home</h1>

<?php $this->start('css'); ?>
<style>
    h1 {
        color: red;
    }
</style>
<?php $this->end();?>

<?php $this->start('script'); ?>
<script>
    console.log('page home');
</script>
<?php $this->end();?>

<?php $this->start('jumbotron'); ?>
<div class="jumbotron">
  <h1>CakePHP3</h1>
  <p>Framework PHP</p>
  <p><a class="btn btn-primary btn-lg" href="http://book.cakephp.org/" role="button">Learn more</a></p>
</div>
<?php $this->end();?>
