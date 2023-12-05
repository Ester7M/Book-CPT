<?php

    add_action('init', function() {
        register_post_type('book', [
            'label' => __('Books', 'me'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-book',
            'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
            'show_in_rest' => true,
            'rewrite' => ['slug' => 'book'],
            'taxonomies' => ['book_author', 'book_genre'],
            'labels' => [
                'singular_name' => __('Book', 'me'),
                'add_new_item' => __('Add new book', 'me'),
                'new_item' => __('New book', 'me'),
                'view_item' => __('View book', 'me'),
                'not_found' => __('No books found', 'me'),
                'not_found_in_trash' => __('No books found in trash', 'me'),
                'all_items' => __('All books', 'me'),
                'insert_into_item' => __('Insert into book', 'me')
            ],		
        ]);
     
        register_taxonomy('book_genre', ['book'], [
            'label' => __('Genres', 'me'),
            'hierarchical' => true,
            'rewrite' => ['slug' => 'book-genre'],
            'show_admin_column' => true,
            'show_in_rest' => true,
            'labels' => [
                'singular_name' => __('Genre', 'me'),
                'all_items' => __('All Genres', 'me'),
                'edit_item' => __('Edit Genre', 'me'),
                'view_item' => __('View Genre', 'me'),
                'update_item' => __('Update Genre', 'me'),
                'add_new_item' => __('Add New Genre', 'me'),
                'new_item_name' => __('New Genre Name', 'me'),
                'search_items' => __('Search Genres', 'me'),
                'parent_item' => __('Parent Genre', 'me'),
                'parent_item_colon' => __('Parent Genre:', 'me'),
                'not_found' => __('No Genres found', 'me'),
            ]
        ]);
        register_taxonomy_for_object_type('book_genre', 'book');
     
        register_taxonomy('book_author', ['book'], [
            'label' => __('Authors', 'me'),
            'hierarchical' => false,
            'rewrite' => ['slug' => 'book-author'],
            'show_admin_column' => true,
            'labels' => [
                'singular_name' => __('Author', 'me'),
                'all_items' => __('All Authors', 'me'),
                'edit_item' => __('Edit Author', 'me'),
                'view_item' => __('View Author', 'me'),
                'update_item' => __('Update Author', 'me'),
                'add_new_item' => __('Add New Author', 'me'),
                'new_item_name' => __('New Author Name', 'me'),
                'search_items' => __('Search Authors', 'me'),
                'popular_items' => __('Popular Authors', 'me'),
                'separate_items_with_commas' => __('Separate authors with comma', 'me'),
                'choose_from_most_used' => __('Choose from most used Authors', 'me'),
                'not_found' => __('No Authors found', 'me'),
            ]
        ]);
        register_taxonomy_for_object_type('book_author', 'book');
    });
    