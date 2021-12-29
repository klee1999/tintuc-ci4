<div class="col-sm-8">
    <h2>Danh sách bài viết</h2>
    <?php foreach($data as $row){ ?>
    <?php echo "<h2>".$row->title."</h2>"; ?>
    <?php echo "<p>".$row->description."</p>"; ?>
    <img src="<?php echo base_url('uploads/'.$row->avatar);?>" width="100%">

    <?php } ?>
</div>