<li>
    <a href="/catalog/<?php echo $category['id'];?>">
         <?php echo $category['name']; ?>
         <?php if(isset($category['childs'])): ?>
            <span class="badge pull-right">
                <i class="fa fa-plus"></i>
            </span>
         <?php endif; ?>
    </a>
    <?php if(isset($category['childs'])): ?>
        <ul style="padding-left: 10px; padding-top:20px;">
            <? echo $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>
