<?php

class View
{
    function generate($content_view, $template_view, $data = null){
        include 'application/view/'.$template_view;
     //   include 'application/view/'.$content_view;
    }
}