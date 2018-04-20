<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\wnmp\nginx\html\tp5\public/../application/index\view\Common\pct.html";i:1516086040;}*/ ?>
<ul class="list-unstyled list-inline">
	<li>
		<select name="" id="" disabled>
			<option value="">中国</option>
		</select>
	</li>
	<li>
		<select name="province" id="province">
			<option value="">省份/直辖市</option>
			<?php foreach($data as $v): if($v['parent_id'] == 1): ?>
			<option value="<?php echo $v['area_id']; ?>" name="pp"><?php echo $v['area_name']; ?></option>
			<?php endif; endforeach; ?>
		</select>
	</li>
	<li>
		<select name="city" id="city">
			<option value="">市/县</option>

		</select>
	</li>

	<li>
		<select name="town" id="town">
			<option value="">镇/区</option>
		</select>
	</li>
	<li><input type="text" name="addr" id="addr" placeholder="请输入街道等详细地址信息"></li>
	<li>
		<button class="btn btn-xs btn-primary">查询</button>
	</li>
</ul>
<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
<script>
	$(function() {
		//地区三级联动
		//<!--获取省的id值，在数据库里查出对应的市-->
		$("#province").change(function() {
			var area_id = $("#province").val();
			$.ajax({
				data: {
					area_id: area_id
				},
				url: "<?php echo url('Cpct/city'); ?>",
				success: function(d) {
					$('#city').empty();
					$('#town').empty();
					for(var i = 0; i < d.length; i++) {
						$('#city').append("<option value=" + d[i].area_id + ">" + d[i].area_name + "</option>")
					}
					cityChange();
				}
			});
		})
		//	<!--获取市的id值，在数据库里查出对应的区-->
		$("#city").change(function() {
			cityChange();

		})

		function cityChange() {
			var area_id = $("#city").val();
			//	console.log(area_id);
			$.ajax({
				data: {
					area_id: area_id
				},
				url: "<?php echo url('Cpct/town'); ?>",
				success: function(d) {
					$('#town').empty();
					for(var i = 0; i < d.length; i++) {
						$('#town').append("<option value=" + d[i].area_id + ">" + d[i].area_name + "</option>")
					}
				}
			})
		}
		//地区三级联动结束
	})
</script>