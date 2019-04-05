<?php
// подключаем WP, можно конечно обойтись без этого, но зачем?
require( dirname(__FILE__) . '/wp-load.php');

// следующий шаг - проверка на обязательные поля, у нас это емайл, имя и сообщение
if( isset( $_POST['authorName'] )
    && isset( $_POST['authorEmail'] ) && is_email( $_POST['authorEmail'] ) // is_email() - встроенная функция WP для проверки корректности емайлов
    && isset( $_POST['authorText'] ) ) {

    $data = array(
        'comment_post_ID'      => $_POST['currentPostId'],
        'comment_author'       => $_POST['authorName'],
        'comment_author_email' => $_POST['authorEmail'],
        'comment_author_url'   => 'http://',
        'comment_content'      => $_POST['authorText'],
        'comment_type'         => '',
        'comment_parent'       => $_POST['replyUser'],
        'comment_author_IP'    => '127.0.0.1',
        'comment_agent'        => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10 (.NET CLR 3.5.30729)',
        'comment_approved'     => 0,
    );

    if(  wp_insert_comment( wp_slash($data) ) ) {
        header('Location:' . site_url($_POST['currentPosition'].'?msg=success') );
        exit;
    }
}
header('Location:' . site_url($_POST['currentPosition'].'?msg=error') );
exit;