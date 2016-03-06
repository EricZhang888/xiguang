<?php /* Smarty version 2.6.26, created on 2016-02-15 15:18:00
         compiled from header.htm */ ?>
<div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.php"><img src="images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li><a href="index.php?rec=clear_cache"><?php echo $this->_tpl_vars['lang']['clear_cache']; ?>
</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);"><?php echo $this->_tpl_vars['lang']['top_welcome']; ?>
<?php echo $this->_tpl_vars['user']['user_name']; ?>
</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=<?php echo $this->_tpl_vars['user']['user_id']; ?>
"><?php echo $this->_tpl_vars['lang']['top_manager_edit']; ?>
</a>
      <a href="manager.php?rec=cloud_account"><?php echo $this->_tpl_vars['lang']['cloud_account']; ?>
</a>
     </div>
    </li>
    <li class="noRight"><a href="login.php?rec=logout"><?php echo $this->_tpl_vars['lang']['top_logout']; ?>
</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 -->