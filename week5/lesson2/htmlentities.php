<?php
$str = "text
with<br><br><br>
enters<tag>
<script>
alert('alert');
</script>";

?>
<center>

    <p><?php echo nl2br(strip_tags($str, '<br><tag>')); ?></p>

<!--    <textarea cols="50" rows="10" style="border:1px solid black; padding: 10px; margin:20px;">--><?php
//
//        echo $str;
//
//    ?><!--</textarea>-->

<!--    <textarea cols="50" rows="10" style="border:1px solid black; padding: 10px; margin:20px;">--><?php
//
//        echo htmlspecialchars($str);
//
//        ?><!--</textarea>-->
<!---->
<!--    <textarea cols="50" rows="10" style="border:1px solid black; padding: 10px; margin:20px;">--><?php
//
//        echo htmlentities(htmlentities($str));
//
//        ?><!--</textarea>-->
<!---->
<!--    <pre>--><?php
//
//        echo htmlentities($str);
//
//        ?><!--</pre>-->
<!---->
<!--    <pre>--><?php
//
//        echo htmlentities(htmlentities($str));
//
//        ?><!--</pre>-->

</center>