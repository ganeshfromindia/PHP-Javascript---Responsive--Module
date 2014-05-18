<?php

if(!isset($_POST['width']) ) {
echo '<script type="text/javascript">
$( function () {
    var width = $(window).width();
    $.ajax({
        type: \'POST\',
        url: \'responsive.php\',
        data: {
            "width": width,
		},
        success: function (data) {
		removestartstyle="<style>";
		newStr = data.replace(removestartstyle," ");
		removeendstyle="</style>";
		newStr = newStr.replace(removeendstyle," ");
        $("style").append(newStr);
        },
    });
});
$(window).resize(function() {
    var width = $(window).width();
    $.ajax({
        type: \'POST\',
        url: \'responsive.php\',
        data: {
            "width": width,
        },
        success: function (data) {
		removestartstyle="<style>";
		newStr = data.replace(removestartstyle," ");
		removeendstyle="</style>";
		newStr = newStr.replace(removeendstyle," ");
        $("style").append(newStr);
        },
    });
});
</script>
';
}
?>

