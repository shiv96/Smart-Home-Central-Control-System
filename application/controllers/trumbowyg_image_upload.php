<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Trumbowyg_image_upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->m_user->check_session();
        //$this->output->enable_profiler(TRUE);
    }

    public function index() {
        /**
         * Upload directory
         */
        define("UPLOADDIR", "../upload/other_image/");

        // Detect if it is an AJAX request
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $file = array_shift($_FILES);
            if (move_uploaded_file($file['tmp_name'], UPLOADDIR . basename($file['name']))) {
                $file = str_replace('admin/', '', BASE_URL . '/upload/other_image/') . $file['name'];
                $data = array(
                    'message' => 'uploadSuccess',
                    'file' => $file,
                );
            } else {
                $error = true;
                $data = array(
                    'message' => 'uploadError',
                );
            }
        } else {
            $data = array(
                'message' => 'uploadNotAjax',
                'formData' => $_POST
            );
        }

        echo json_encode($data);
    }

}
