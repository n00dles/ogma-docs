<?php 

class Bootstrapcore{
	

	public function __construct() {

    }


	public static function bootstrap_notice($atts, $content = null){
    extract(Shortcodes::shortcodeAtts(array(
	        'type' => 'unknown'
	    ), $atts));
	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<div class="alert alert-'.$type.' alert-dismissable">';
	    $result .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
	    $result .= Shortcodes::doShortcode($content );
	    $result .= '</div>'; 
	    return  $result;
	}

	public static function bootstrap_buttons($atts, $content = null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'size' => 'default',
	        'type' => 'default',
	        'value' => 'button',
	        "icon" => '',
	        'href' => "#"
	    ), $atts));

	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<a class="btn btn-'.$size.' btn-'.$type.'" href="'.$href.'">';
	    if ($icon!=''){
	    	$result .= '<span class="glyphicon glyphicon-'.$icon.'"></span> ';	
	    }
	    $result .= $value;
	    $result .= '</a>';
	    return $result;
	}

	public static function bootstrap_collapse($atts, $content = null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'id'=>''
	         ), $atts));
	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<div class="panel-group" id="'.$id.'">';
	    $result .= Shortcodes::doShortcode($content);
	    $result .= '</div>'; 
	    return $result ;
	}



	public static function bootstrap_citem($atts, $content = null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'id'=>'',
	        'title'=>'Collapse title',
	        'parent' => ''
	         ), $atts));
	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = ' <div class="panel panel-default">';
	    $result .= ' <div class="panel-heading">';
	    $result .= '    <h4 class="panel-title">';
	    $result .= '<a class="accordion-toggle" data-toggle="collapse" data-parent="#'.$parent.'" href="#'.$id.'">';
	    $result .= $title;
	    $result .= '</a>';
	    $result .= '</h4>';
	    $result .= '</div>';
	    $result .= '<div id="'.$id.'" class="panel-collapse collapse">';
	    $result .= '<div class="panel-body">';
	    $result .= Shortcodes::doShortcode($content );
	    $result .= '</div>'; 
	    $result .= '</div>'; 
	    $result .= '</div>'; 
	    return $result;
	}

	public static function bootstrap_row($atts, $content = null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'class' => 'row'
	    ), $atts));
	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<div class="'.$class.'">';
	    $result .= Shortcodes::doShortcode($content );
	    $result .= '</div>'; 
	    return $result;
	}
	

	public static function bootstrap_span($atts,$content=null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'class' => 'col-xs-1'
	        ), $atts));

	    $result = '<div class="'.$class.'">';
	    $result .= Shortcodes::doShortcode($content );
	    $result .= '</div>'; 
	    return $result;
	}

	public static function bootstrap_icons($atts, $content = null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'name' => 'default'
	    ), $atts));

	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<span class="glyphicon glyphicon-'.$name.'"></span>';
	    return  $result;
	}
	
	public static function bootstrap_tooltip($atts, $content = null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'placement' => 'top',
	        'trigger' => 'hover',
	        'href' => "#"
	    ), $atts));
		
	    $placement = (in_array($placement, array('top', 'right', 'bottom', 'left'))) ? $placement : "top";
	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $title = explode("\n", wordwrap($content, 20, "\n"));
	    $result = '<a href="#" data-toggle="tooltip" title="'.$title[0].'" data-placement="'.$placement.'" data-trigger="'.$trigger.'">'.$content.'</a>';
	    return $result;
	}

	public static function bootstrap_panel($atts, $content = null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'type' => 'default',
	        'title' => '',
	        'footer' => ''
	    ), $atts));

	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<div class="panel panel-'.$type.'">';
	    if ($title!='') $result .= '<div class="panel-heading">'.$title.'</div>';
	    $result .= '<div class="panel-body">';
	    $result .= Shortcodes::doShortcode($content );
	    $result .= '</div>';
	    if ($footer!='') $result .= '<div class="panel-footer">'.$footer.'</div>'; 
	    $result .= '</div>';
	    return  $result;
	}

	public static function bootstrap_badge($atts, $content = null){
	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<span class="badge">'.Shortcodes::doShortcode($content).'</span>';
	    return  $result;
	}

	public static function bootstrap_lead($atts, $content = null){
	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<p class="lead">'.Shortcodes::doShortcode($content).'</p>';
	    return  $result;
	}

	public static function bootstrap_label($atts, $content = null){
	    extract(Shortcodes::shortcodeAtts(array(
	        'type' => 'default'
	    ), $atts));

	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<span class="label label-'.$type.'">'.Shortcodes::doShortcode($content).'</span>';
	    return  $result;
	}

	public static function bootstrap_jumbotron($atts, $content = null){
		extract(Shortcodes::shortcodeAtts(array(
	        'fullwidth' => 'true'
	    ), $atts));
	    $content = preg_replace('/<br class="nc".\/>/', '', $content);
	    $result = '<div class="jumbotron">';
	    if ($fullwidth=='true'){
	    	$result .= '<div>';
	    }
	    $result .= Shortcodes::doShortcode($content);
 		if ($fullwidth=='true'){
	    	$result .= '</div>';
	    }
	    $result .= '</div>';
	    return  $result;
	}

	
	public static function addiCode($atts, $content = null) {
	 extract(Shortcodes::shortcodeAtts(array(
	    "mode" => null
	  ), $atts));
	  return '<code>'. $content.'</code>'; 
	}

	public static function addCode($atts, $content = null) {
	 extract(Shortcodes::shortcodeAtts(array(
	    "mode" => null
	  ), $atts));
	  $mode   = isset($mode) ? $mode : 'html'; 
	  return '<pre data-language="'.$mode.'">'. htmlspecialchars($content) .'</pre>'; 
	}



	
	
	
}


Shortcodes::addShortcode('icode','Bootstrapcore::addiCode', '[icode mode=""]content[/icode]');
Shortcodes::addShortcodeDesc('icode','Inline Code', '[icode mode=""]content[/icode]');

Shortcodes::addShortcode('code','Bootstrapcore::addCode', '[code mode=""]content[/code]');
Shortcodes::addShortcodeDesc('code','Code Block', '[code mode=""]content[/code]');


Shortcodes::addShortcode('jumbotron', 'Bootstrapcore::bootstrap_jumbotron');
Shortcodes::addShortcodeDesc('jumbotron','Bootstrap Jumbotron', '[jumbotron]content[/jumbotron]');

Shortcodes::addShortcode('label', 'Bootstrapcore::bootstrap_label');
Shortcodes::addShortcodeDesc('label','Bootstrap Label', '[label]content[/label]');

Shortcodes::addShortcode('badge', 'Bootstrapcore::bootstrap_badge');
Shortcodes::addShortcodeDesc('badge','Bootstrap Badge', '[badge]content[/badge]');

Shortcodes::addShortcode('lead', 'Bootstrapcore::bootstrap_lead');
Shortcodes::addShortcodeDesc('lead','Bootstrap Lead', '[lead]content[/lead]');

Shortcodes::addShortcode('panel', 'Bootstrapcore::bootstrap_panel');
Shortcodes::addShortcodeDesc('panel','Bootstrap Panel', '[panel type="" title="" footer=""]content[/panel]');

Shortcodes::addShortcode('tooltip', 'Bootstrapcore::bootstrap_tooltip');
Shortcodes::addShortcodeDesc('tooltip','Bootstrap Tooltip', '[tooltip placement="" trigger="" href=""]content[/tooltip]');

Shortcodes::addShortcode('icon', 'Bootstrapcore::bootstrap_icons');
Shortcodes::addShortcodeDesc('icon','Bootstrap Icon', '[icon name=""]content[/icon]');

Shortcodes::addShortcode('row', 'Bootstrapcore::bootstraps_row');
Shortcodes::addShortcodeDesc('row','Bootstrap Row', '[rown]content[/row]');

Shortcodes::addShortcode('col', 'Bootstrapcore::bootstrap_span');
Shortcodes::addShortcodeDesc('col','Bootstrap Column', '[col class=""]content[/col]');

Shortcodes::addShortcode('collapse', 'Bootstrapcore::bootstrap_collapse');
Shortcodes::addShortcodeDesc('collapse','Bootstrap Collapseable', '[collapse id=""]content[/collapse]');

Shortcodes::addShortcode('citem', 'Bootstrapcore::bootstrap_citem');
Shortcodes::addShortcodeDesc('citem','Bootstrap Collapseable Item', '[citem id="" title="" parent=""]content[/citem]');

Shortcodes::addShortcode('button', 'Bootstrapcore::bootstrap_buttons');
Shortcodes::addShortcodeDesc('button','Bootstrap Button', '[button size="" type="" value="" href="" icon=""]content[/button]');

Shortcodes::addShortcode('notification', 'Bootstrapcore::bootstrap_notice');
Shortcodes::addShortcodeDesc('notification','Bootstrap Notification', '[notification type=""]content[/notification]');
