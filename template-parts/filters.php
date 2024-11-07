<?php
// Replace XXXX with your Field Group ID
$fields = acf_get_fields(183);
$current_category = get_queried_object();
$category_url = get_term_link( $current_category->term_id );

if ( !$fields ) {
    echo '<p>No fields found. Please ensure ACF fields are properly set up.</p>';
} else {
    echo '<form id="product-filters" method="get" action="' . esc_url( $category_url )  . '">';

    foreach ( $fields as $field ) {
        if ( in_array( $field['type'], array('checkbox', 'select', 'radio') ) ) {
            echo '<div class="sr-only filter-' . esc_attr( $field['name'] ) . '">';
            echo '<label for="' . esc_attr( $field['name'] ) . '">' . esc_html( $field['label'] ) . '</label>';
            
            echo '<select class="bg-primary p-4 text-white" name="' . esc_attr( $field['name'] ) . '" id="' . esc_attr( $field['name'] ) . '">';
            echo '<option value="">Select ' . esc_html( $field['label'] ) . '</option>';
            
            foreach ( $field['choices'] as $choice_key => $choice_label ) {
                echo '<option value="' . esc_attr( $choice_key ) . '">' . esc_html( $choice_label ) . '</option>';
            }
            
            echo '</select>';
            echo '</div>';
        }
    }

    echo '<button class="text-white bg-primary p-4 rounded" type="submit">Filter</button>';
    echo '</form>';
}
?>
