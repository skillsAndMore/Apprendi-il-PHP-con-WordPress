<?php
    //Dichiarazione della classe
    class WP_Post{
        /**
         * The post's title.
         *
         * @access public
         * @var string
         */
        public $post_title = '';

        /**
         * The post's content.
         *
         * @var string
         */
        public $post_content = '';

        /**
         * The post's status.
         *
         * @var string
         */
        public $post_status = 'publish';

        /**
         * Constructor.
         *
         * @param array $post Post array.
         */
        public function __construct( $post ) {
        	//Costruisco l'oggetto
            $this->post_title = $post['title'];
            $this->post_content = $post['content'];
            $this->post_status = $post['status'];
        }

        /**
         * Retrieve WP_Post instance.
         *
         * @access public
         *
         * @global wpdb $wpdb WordPress database abstraction object.
         *
         * @param int $post_id Post ID.
         * @return WP_Post|false Post object, false otherwise.
         */
        public function get_instance( ) {
            echo "<pre>";
        	print_r( $this );
            echo "</pre>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>La programmazione a oggetti</title>
</head>
<body>
  <h1>La programmazione a oggetti</h1>
  <?php
    //Utilizzo della classe per creare oggetti
    $art1 = array(
        'title' => "Ciao Mondo 1",
        'content' => "Contenuto...",
        'status' => "bozza"
    );

    $art2 = array(
        'title' => "Ciao Mondo 2",
        'content' => "Contenuto...",
        'status' => "pubblicato"
    );

    $p1 = new WP_Post( $art1 );
    $p2 = new WP_Post( $art2 );

    $p1->get_instance();
    $p2->get_instance();
  ?>
</body>
</html>
