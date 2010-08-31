<?php

interface boo_view_engine {
    public function setTemplate( $templateFile )

    public function set( $key, $value )

    public function get( $key )

    public function execute()
}
