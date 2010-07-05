<div id="headerbar">
<h1 class="header">
 <?php echo $this->escape($this->title) ?>
</h1>
</div>

<div id="symbol-declarations">
<h2><?php echo _("Declarations") ?></h2>
<? foreach ($this->declarations as $declaration): ?>
 <dl class="box">
  <dt><?php echo $this->escape($declaration['title']) ?></dt>
  <? foreach ($declaration['files'] as $file): ?>
   <dd><?php echo $file ?></dd>
  <? endforeach ?>
 </dl>
<? endforeach ?>
</div>

<div id="symbol-references">
<h2><?php echo _("Referenced in") ?></h2>
<? foreach ($this->references as $reference): ?>
 <dl class="box">
  <dt><?php echo $reference['file'] ?></dt>
   <? foreach ($reference['lines'] as $line): ?>
   <dd><?php echo $line ?></dd>
   <? endforeach ?>
 </dl>
<? endforeach ?>
</div>
