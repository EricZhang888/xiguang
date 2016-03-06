<?php /* Smarty version 2.6.26, created on 2016-02-15 15:47:27
         compiled from index.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<meta name="Copyright" content="Douco Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">cloud_update_number('<?php echo $this->_tpl_vars['localsite']; ?>
')</script>
</head>
<body>
<div id="dcWrap"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div id="index" class="mainBox" style="padding-top:18px;<?php echo $this->_tpl_vars['workspace']['height']; ?>
">
   <div id="douApi"></div>
   <?php if ($this->_tpl_vars['rec'] == 'default'): ?>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
    <tr>
     <td width="35%" valign="top" class="pr">
      <div class="indexBox">
       <div class="boxTitle"><?php echo $this->_tpl_vars['lang']['title_site_info']; ?>
</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <td><?php echo $this->_tpl_vars['lang']['qishi_dianpu_wentizongshu']; ?>
：</td>
          <td><strong><?php echo $this->_tpl_vars['sys_info']['num_product']; ?>
</strong></td>
         </tr>
         <tr>
          <td width="120"><?php echo $this->_tpl_vars['lang']['qishi_dianpu_yichuli']; ?>
：</td>
          <td><strong><?php echo $this->_tpl_vars['sys_info']['num_yichuli']; ?>
</strong></td>
         </tr>
         <tr>
          <td><?php echo $this->_tpl_vars['lang']['qishi_dianpu_weichuli']; ?>
：</td>
          <td><font color="red"><strong><?php echo $this->_tpl_vars['sys_info']['num_weichuli']; ?>
</strong></font></td>
         </tr>
        </table>
       </ul>
      </div>
     </td>
     <!-- 店铺统计 -->
     <td width="35%" valign="top" class="pr">
      <!--<div class="indexBox">
       <div class="boxTitle"><?php echo $this->_tpl_vars['lang']['qishi_dianpu_tongji']; ?>
</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <td width="120"><?php echo $this->_tpl_vars['lang']['num_page']; ?>
：</td>
          <td><strong><?php echo $this->_tpl_vars['sys_info']['num_page']; ?>
</strong></td>
         </tr>
         <tr>
          <td><?php echo $this->_tpl_vars['lang']['num_product']; ?>
：</td>
          <td><strong><?php echo $this->_tpl_vars['sys_info']['num_product']; ?>
</strong></td>
         </tr>
         <tr>
          <td><?php echo $this->_tpl_vars['lang']['rewrite']; ?>
：</td>
          <td><strong><?php if ($this->_tpl_vars['site']['rewrite']): ?><?php echo $this->_tpl_vars['lang']['open']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['close']; ?>
<a href="system.php" class="cueRed ml"><?php echo $this->_tpl_vars['lang']['open_cue']; ?>
</a> 
           <?php endif; ?></strong></td>
         </tr>
         <tr>
          <td><?php echo $this->_tpl_vars['lang']['if_sitemap']; ?>
：</td>
          <td><strong><?php if ($this->_tpl_vars['site']['sitemap']): ?><?php echo $this->_tpl_vars['lang']['open']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['close']; ?>
<?php endif; ?></strong></td>
         </tr>
         <tr>
          <td><?php echo $this->_tpl_vars['lang']['dou_version']; ?>
：</td>
          <td><strong><?php echo $this->_tpl_vars['site']['douphp_version']; ?>
</strong></td>
         </tr>
        </table>
       </ul>
      </div>-->
     </td>
     <!-- 店铺统计 -->
     <td valign="top" class="pl">
      <div class="indexBox">
       <div class="boxTitle"><?php echo $this->_tpl_vars['lang']['title_admin_tongji']; ?>
</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <th width="60%"><?php echo $this->_tpl_vars['lang']['manager_wenti_fenlei']; ?>
</th>
          <th width="40%"><?php echo $this->_tpl_vars['lang']['manager_wenti_zhanbi']; ?>
</th>
         </tr>
         <?php $_from = $this->_tpl_vars['product_list_zhanbi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product_list_zhanbi']):
?>
         <tr>
          <td align="center"><?php echo $this->_tpl_vars['product_list_zhanbi']['name']; ?>
</td>
          <td align="center"><?php echo $this->_tpl_vars['product_list_zhanbi']['zhanbi']; ?>
</td>
         </tr>
         <?php endforeach; endif; unset($_from); ?>
        </table>
       </ul>
      </div>
     </td>
    </tr>
   </table>
   <?php endif; ?> 
  </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>