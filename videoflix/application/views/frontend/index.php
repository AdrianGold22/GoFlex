<?php
$selected_theme	= $this->crud_model->get_active_theme();
$this->crud_model->get_videos();
include $selected_theme . '/index.php';
?>