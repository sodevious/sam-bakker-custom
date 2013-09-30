<?php
/**
 * The template for displaying search forms in sam-bakker-custom
 *
 * @package sam-bakker-custom
 */
?>

<form action="<?php echo home_url( '/' ); ?>" method="get">
    <fieldset>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    </fieldset>
</form>
