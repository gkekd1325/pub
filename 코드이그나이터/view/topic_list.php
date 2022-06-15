<div class="span2">
    <ul class="nav nav-tabs nav-stacked">
    <?php
    foreach($mains as $entry){       
    ?>
        <!-- db 타이틀 앵커목록 get으로 연결해 제목,내용표시-->
        <li><a href="/index.php/topic/get/<?=$entry['id']?>"><?=$entry['title']?></a></li> <!--  -->
    <?php        
    }
    ?>
    </ul>
</div>