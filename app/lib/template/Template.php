<?php
namespace PHPMVC\LIB\Template;

class Template
{
    use TemplateHelper;
    
    private $_templateParts;
    private $_action_view;
    private $_data;
    private $_registry;

    public function __get($key)
    {
        return $this->_registry->$key;
    }
    
    public function __construct(array $parts)
    {
        $this->_templateParts = $parts;
    }

    public function setActionViewFile($actionViewPath)
    {
        $this->_action_view = $actionViewPath;
    }

    public function setAppData($data){
        $this->_data = $data;
    }

    // TODO: implement a better solution
    public function swapTemplate($template)
    {
        $this->_templateParts['templates'] = $template;
    }

    public function setRegistry($registry)
    {
        $this->_registry = $registry;
    }

    //Render Header
    private function renderHeader()
    {
        extract($this->_data);
        require_once(TEMPLATES_PATH . 'header' . DS . 'header.php');
    }

    //Render Footer
    private function renderFooter()
    {
        extract($this->_data);
        require_once(TEMPLATES_PATH . 'footer' . DS . 'footer.php');
    }

    //Render Content blocks
    private function renderTemplateBlocks()
    {
        if(!array_key_exists('templates', $this->_templateParts)){
            trigger_error('Sorry you have to define the templates blocks', E_USER_WARNING);
        }else{

            $parts = $this->_templateParts['templates'];

            if(!empty($parts)){
                extract($this->_data);
                foreach($parts as $partKey => $file) {
                    if($partKey === ':view'){
                        require_once($this->_action_view);      
                    }else{
                        require_once($file);
                    }
                }
            }
        }
    }

    //Render header resources
    public function renderHeaderResources()
    {
        $output = '';

        if(!array_key_exists('header_resources', $this->_templateParts)){
            trigger_error('Sorry you have to define the header resources', E_USER_WARNING);
        }else{

            $resources = $this->_templateParts['header_resources'];

            //Generate CSS Links
            $cssFiles = $resources['css'];

            if(!empty($cssFiles)){
                foreach($cssFiles as $cssKey => $path){
                    $output .= '<link id="' . $cssKey . '" rel="stylesheet" href="' . $path . '" type="text/css" media="all" />';
                }
            }

            //Generate JS Links
            $jsFiles = $resources['js'];
    
            if(!empty($jsFiles)){
                foreach($jsFiles as $jsKey => $path){
                    $output .= '<script src="' . $path . '" type="text/javascript"></script>';
                }
            }
        }

        echo $output;
    }

    public function fc_head()
    {
        extract($this->_data);
        return self::renderHeaderResources();
    }

    //Render footer resources
    public function renderFooterResources()
    {
        $output = '';

        if(!array_key_exists('footer_resources', $this->_templateParts)){
            trigger_error('Sorry you have to define the footer resources', E_USER_WARNING);
        }else{

            $resources = $this->_templateParts['footer_resources'];

            //Generate JS Links
            $jsFiles = $resources['js'];
    
            if(!empty($jsFiles)){
                foreach($jsFiles as $jsKey => $path){
                    $output .= '<script src="' . $path . '" type="text/javascript"></script>';
                }
            }
        }

        echo $output;
    }

    public function fc_footer()
    {
        extract($this->_data);
        return self::renderFooterResources();
    }

    //Render template pages
    public function renderApp()
    {
        //render header
        $this->renderHeader();

        //render blocks
        $this->renderTemplateBlocks();

        //render footer
        $this->renderFooter();
        
        
    }
}