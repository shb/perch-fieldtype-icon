<?php

class PerchFieldType_icon extends PerchAPI_FieldType
{
    public function add_page_resources()
    {
        $Perch = Perch::fetch();
        //$Perch->add_head_content('<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />');
        $Perch->add_head_content('<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />');
        $Perch->add_javascript( PERCH_LOGINPATH.'/addons/fieldtypes/icon/assets/admin.js' );
    }

    public function render_inputs($details=array())
    {
        $value = $this->Form->get( $details, $this->Tag->input_id() );
        $html = array();
        $html[] = '<i id="'.$this->Tag->input_id().'_preview" class="fa fa-'.$value.' fa-2x fa-fw" style="vertical-align:middle"></i>';
        $html[] = '<select id="'.$this->Tag->input_id().'" name="'.$this->Tag->input_id().'" onchange="PerchFieldType_icon.onChange(event)" value="'.$value.'">';
        $html[] = require( 'options.inc' );
        $html[] = '</select>';
        return implode( "\n", $html );
    }
   
    /*public function get_raw($post=false, $Item=false) 
    {
        return "porcodio";
    }*/
    
    /*public function get_processed($raw=false)
    { 
        return "porco dio";   
    }
    
    public function get_search_text($raw=false)
    {
    }*/

    public function render_admin_listing($raw=false)
    {
        return '<i class="fa fa-'+$this->get_raw()+' fa-3x fa-fw"></i>';
    }

}
