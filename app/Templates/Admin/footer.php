</div>
<div class="footer">
	<div class="pull-right">
		 Dev: <strong> Phan Tuấn Tú</strong>.
	</div>
	<div>
		<strong>Copyright</strong> Icoding Active Co. Ltd &copy; 2014-2015
	</div>
</div>

</div>
</div>

<?php
Assets::js([
	Url::templateAdminPath().'js/main/admin.min.js',
	Url::templateAdminPath().'js/page/utils.js',
]);
echo $js; //place to pass data / plugable hook zone
echo $footer; //place to pass data / plugable hook zone
?>

</body>
</html>
