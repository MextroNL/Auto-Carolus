<form name="filters" class="filter_form" method="get" action="<?php the_permalink();?>#content">
    <!--Post per page-->
    <div class="amount_filter">
        <label class="wrap" for="posts_per_page" id="amountLabel"><?php echo $posts_per_pagelabel; ?></label>
        <select onchange="document.filters.submit()" name="posts_per_page" id="number_filter">
            <option value="4" <?php selected(4,$_REQUEST['posts_per_page']);?>>4</option>
            <option value="8" <?php selected(8,$_REQUEST['posts_per_page']);?>>8</option>
            <option value="16" <?php selected(16,$_REQUEST['posts_per_page']);?>>16</option>
            <option value="-1" <?php selected(-1,$_REQUEST['posts_per_page']);if( isset($_REQUEST['search'])) {echo 'selected="selected"';}?>><?php echo $showall; ?></option>
        </select>
    </div>
    <!--Beroep Filter-->
    <div class="function_filter">
        <label class="wrap" for="tag_filter" id="functionLabel"><?php echo $filter_1; ?></label>
        <select onchange="document.filters.submit()" name="tag_filter" id="tag_filter">
            <option value="0" <?php selected(0,$_REQUEST['tag_filter']);if( isset($_REQUEST['search'])) {echo 'selected="selected"';}?>><?php echo $showall; ?></option>
            <option value="regulier" <?php selected('regulier',$_REQUEST['tag_filter']);?>>Placeholder</option>
            <option value="autofloraison" <?php selected('autofloraison',$_REQUEST['tag_filter']);?>>Placeholder</option>
            <option value="feminissee" <?php selected('feminissee',$_REQUEST['tag_filter']);?>>Placeholder</option>
        </select>
    </div>
</form>