<?php
// Replace XXXX with your Field Group ID
$fields = acf_get_fields(183);

if ( !$fields ) {
    echo '<p>No fields found. Please ensure ACF fields are properly set up.</p>';
} else {
    echo '<form id="product-filters" method="get" action="' . esc_url( home_url( '/shop/' ) ) . '">';

    foreach ( $fields as $field ) {
        if ( in_array( $field['type'], array('checkbox', 'select', 'radio') ) ) {
            echo '<div class="filter-' . esc_attr( $field['name'] ) . '">';
            echo '<label for="' . esc_attr( $field['name'] ) . '">' . esc_html( $field['label'] ) . '</label>';
            
            echo '<select name="' . esc_attr( $field['name'] ) . '" id="' . esc_attr( $field['name'] ) . '">';
            echo '<option value="">Select ' . esc_html( $field['label'] ) . '</option>';
            
            foreach ( $field['choices'] as $choice_key => $choice_label ) {
                echo '<option value="' . esc_attr( $choice_key ) . '">' . esc_html( $choice_label ) . '</option>';
            }
            
            echo '</select>';
            echo '</div>';
        }
    }

    echo '<button type="submit">Filter</button>';
    echo '</form>';
}
?>
