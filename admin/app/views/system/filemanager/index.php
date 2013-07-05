<!-- Action -->
<div class="right_top">
	<span class="right_action">
		<div class="right_title"><?php echo $title; ?></div>
		<a class="action_back" href="#" onclick="backDir('<?php echo dirname($filelist['path']); ?>');return false;"><em class="UI">&nbsp;</em>返回上级</a>
		 <span>|</span>
		 <a class="action_refresh" href="#" onclick="refreshDir('<?php echo $filelist['path']; ?>');return false;"><em class="UI">&nbsp;</em>刷新</a>
		 <span>|</span>
		 <a class="action_upload" href="#"><em class="UI">&nbsp;</em>上传</a>
		 <span>|</span>
		 <a class="action_addfolder" href="#"><em class="UI">&nbsp;</em>新建文件夹</a>
		 <span>|</span>
		 <a class="action_down" href="#"><em class="UI">&nbsp;</em>下载</a>
		 <span>|</span>
		 <a class="action_del" href="#"><em class="UI">&nbsp;</em>删除</a>
	</span>
</div>
<div class="right_line">&nbsp;</div>
<!-- Action End -->
<!-- Content -->
<table class="table_list">
	<tr>
		<td colspan="6" align="left">
			当前位置：<span id="filePath"><?php echo $filelist['path']; ?></span>
		</td>
	</tr>
	<tr class="title" id="table">
		<td width="20"><a href="#" id="checkboxY">√</a><a href="#" id="checkboxN">×</a></td>
		<td>名称</td>
		<td width="120">创建时间</td>
		<td width="120">修改时间</td>
		<td width="80">大小</td>
		<td width="40">权限</td>
	</tr>
	<tbody id="listBG">
<?php if(@$filelist['folder']){foreach($filelist['folder'] as $val){ ?>
	<tr>
		<td><input type="checkbox" value="<?php echo $val['name'];?>" /></td>
		<td align="left"><a href="#" onclick="openDir('<?php echo $filelist['path'].$val['name']; ?>');return false;" class="ico_folder"><em class="UI">&nbsp;</em><?php echo $val['name']; ?></a></td>
		<td><?php echo $val['ctime']; ?></td>
		<td><?php echo $val['mtime']; ?></td>
		<td><?php echo $val['size']; ?></td>
		<td><?php echo $val['perm']; ?></td>
	</tr>
<?php }} ?>
<?php if(@$filelist['files']){foreach($filelist['files'] as $val){ ?>
	<tr>
		<td><input type="checkbox" value="<?php echo $val['name'];?>" /></td>
		<td align="left"><a href="#" class="ico_file"><em class="UI">&nbsp;</em><?php echo $val['name']; ?></a></td>
		<td><?php echo $val['ctime']; ?></td>
		<td><?php echo $val['mtime']; ?></td>
		<td><?php echo $val['size']; ?></td>
		<td><?php echo $val['perm']; ?></td>
	</tr>
<?php }} ?>
	</tbody>
</table>
<div class="page">文件信息</div>
<!-- Content End -->